<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Psychologist;
use App\Models\Booking;
use Carbon\Carbon;
use DataTables;

class BookingController extends Controller
{
    public function getBookings(Request $request) {
        $pageTitle = __('admin.booking.list');
        
        if ($request->ajax()) {
            $bookings = Booking::all();
            return DataTables::of($bookings)
                ->addIndexColumn()
                ->editColumn('psychologist', function ($row) {
                    return '<a href="'. route('admin.counselors.show', $row->psychologist->id) .'" target="__blank" class="d-flex align-items-center">'. $row->psychologist->name .' <img src="'. asset('storage/'. $row->psychologist->photo) .'" alt="'. $row->psychologist->name .'" class="counselor-avatar"/></a>';
                })
                ->editColumn('email', function($row) {
                    return '<a href="mailto:'. $row->email .'">'. $row->email .'</a>';
                })
                ->editColumn('service', function ($row) {
                    $span = '';
                    switch ($row->service->id) {
                        case 1:
                            $span = '<span class="badge badge-secondary">'. $row->service->title .'</span>';
                            break;
                        case 2:
                            $span = '<span class="badge badge-success">'. $row->service->title .'</span>';
                            break;
                        case 3:
                            $span = '<span class="badge badge-info">'. $row->service->title .'</span>';
                            break;
                        case 4:
                            $span = '<span class="badge badge-warning">'. $row->service->title .'</span>';
                            break;
                        case 5:
                            $span = '<span class="badge badge-danger">'. $row->service->title .'</span>';
                            break;
                        case 6:
                            $span = '<span class="badge badge-dark">'. $row->service->title .'</span>';
                            break;
                        default:
                            $span = '<span class="badge badge-primary">'. $row->service->title .'</span>';
                    }
                    return $span;
                })
                ->editColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->toDateString();
                })
                ->addColumn('action', function ($row) {
                    // $btn = '<a href="'. route('admin.counselors.show', $row->id) .'" data-id="'.$row->id.'" class="btn btn-success btn-sm mb-1 mr-1"><i class="far fa-eye"></i></a>';

                    $btn = ' <button onclick="deleteData('. "'$row->id'" .')" data-id="'.$row->id.'" class="btn btn-danger btn-sm mb-1"><i class="far fa-trash-alt"></i></button>';

                    $btn .= '<form id="deleteForm'. $row->id .'" action="'. route('admin.bookings.destroy', $row->id) .'" method="POST" style="display: none">
                    <input type="hidden" name="_token" value="'. csrf_token() .'">
                    <input type="hidden" name="_method" value="DELETE">
                    @method("DELETE")
                    </form>';

                    return $btn;
                })
                ->rawColumns(['psychologist', 'service', 'email', 'action'])
                ->make(true);
        }
        return view('admin.booking.index', compact('pageTitle'));
    }
    public function destroy($id) {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()
            ->back()
            ->with('status', 'success')
            ->with('message', __('admin.msg.delSuccess', ['attribute' => 'booking']));;
    }
}
