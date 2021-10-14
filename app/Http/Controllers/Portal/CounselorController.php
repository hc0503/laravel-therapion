<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Psychologist;
use App\Models\Service;
use Carbon\Carbon;
use DataTables;
use Illuminate\Support\Str;

class CounselorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageTitle = __('admin.counselor.list');

        if ($request->ajax()) {
            $counselors = Psychologist::all();

            return DataTables::of($counselors)
                ->addIndexColumn()
                ->editColumn('email', function($row) {
                    return '<a href="mailto:'. $row->email .'">'. $row->email .'</a>';
                })
                ->editColumn('photo', function($row) {
                    return '<img src="'. asset('storage/'. $row->photo) .'" alt="'. $row->name .'" class="counselor-avatar"/>';
                })
                ->editColumn('status', function($row) {
                    if ($row->status)
                        return '<span class="badge badge-success">Active</span>';
                    else
                        return '<span class="badge badge-warning">Inactive</span>';
                })
                ->editColumn('created_at', function($row) {
                    return Carbon::parse($row->created_at)->toDateString();
                })
                ->addColumn('action', function($row) {
                    $btn = '<a href="'. route('admin.counselors.show', $row->id) .'" data-id="'.$row->id.'" class="btn btn-success btn-sm mb-1 mr-1"><i class="far fa-eye"></i></a>';

                    $btn .= '<a href="'. route('admin.counselors.edit', $row->id) .'" data-id="'.$row->id.'" class="btn btn-primary btn-sm mb-1"><i class="far fa-edit"></i></a>';

                    $btn .= ' <button onclick="deleteData('. "'$row->id'" .')" data-id="'.$row->id.'" class="btn btn-danger btn-sm mb-1"><i class="far fa-trash-alt"></i></button>';

                    $btn .= '<form id="deleteForm'. $row->id .'" action="'. route('admin.counselors.destroy', $row->id) .'" method="POST" style="display: none">
                    <input type="hidden" name="_token" value="'. csrf_token() .'">
                    <input type="hidden" name="_method" value="DELETE">
                    @method("DELETE")
                    </form>';

                    return $btn;
                })
                ->rawColumns(['email', 'photo', 'status', 'action'])
                ->make(true);
        }
        return view('admin.counselor.index', compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = __('admin.counselor.create');
        $services = Service::all();
        return view('admin.counselor.create', compact('pageTitle', 'services'));
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
            'email' => ['required', 'max:255', 'email'],
            'title' => ['required', 'max:255'],
            'photo' => ['mimes:jpeg,jpg,png', 'max:2048', 'image'],
            'info' => [],
            'education' => [],
            'topic' => [],
            'about' => [],
            'country_code' => ['required'],
            'services' => ['required'],
            'status' => ['required'],
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('counselors', 'public');
        }
        $psychologist = Psychologist::create($validated);
        $psychologist->services()->sync($validated['services']);
        if ($request->exit === 'true')
            return redirect()
                ->route('admin.counselors.index')
                ->with('status', 'success')
                ->with('message', __('admin.counselor.msg.saveSuccess'));
        else
            return redirect()
                ->back()
                ->with('status', 'success')
                ->with('message', __('admin.sounselor.msg.saveSuccess'));
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $psychologist = Psychologist::findOrFail($id);
        $psychologist->delete();
        return redirect()
            ->route('admin.counselors.index')
            ->with('status', 'success')
            ->with('message', __('admin.counselor.delSuccess'));
    }
}
