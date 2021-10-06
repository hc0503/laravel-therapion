<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageTitle = __('admin.user.list');

        if ($request->ajax()) {
            $users = User::all();

            return DataTables::of($users)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->toDateString();
                })
                ->addColumn('action', function ($row) {
                    if (request()->user()->id === $row->id)
                        $disabled = 'disabled';
                    else
                        $disabled = '';

                    $btn = '<a href="'. route('admin.users.edit', $row->id) .'" data-id="'.$row->id.'" class="btn btn-primary btn-sm mb-1"><i class="far fa-edit"></i></a>';

                    $btn .= ' <button onclick="deleteUser('. "'$row->id'" .')" data-id="'.$row->id.'" class="btn btn-danger btn-sm mb-1" '. $disabled .'><i class="far fa-trash-alt"></i></button>';

                        $btn .= '<form id="deleteForm'. $row->id .'" action="'. route('admin.users.destroy', $row->id) .'" method="POST" style="display: none">
                        <input type="hidden" name="_token" value="'. csrf_token() .'">
                        <input type="hidden" name="_method" value="DELETE">
                        @method("DELETE")
                        </form>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('portal.user.index', compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = __('admin.user.create');
        return view('portal.user.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);
        $user = User::create($validated);
        if ($request->exit === 'true')
            return redirect()
                ->route('admin.user.index')
                ->with('status', 'success')
                ->with('message', __('admin.user.msg.saveSuccess'));
        else
            return redirect()
                ->back()
                ->with('status', 'success')
                ->with('message', __('admin.user.msg.saveSuccess'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $pageTitle = __('admin.user.edit');
        return view('portal.user.edit', compact('pageTitle', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,'.$user->id, 'max:255'],
            'password' => ['min:8', 'confirmed', 'nullable'],
        ]);
        $user->update($validated);
        return redirect()
            ->route('admin.users.index')
            ->with('status', 'success')
            ->with('message', __('admin.user.msg.updateSuccess'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()
            ->route('admin.users.index')
            ->with('status', 'success')
            ->with('message', __('admin.user.msg.delSuccess'));
    }
}
