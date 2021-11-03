<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psychologist;

class BookingController extends Controller
{
    public function postBook(Request $request, $id) {
        $validated = $request->validate([
            'service_id' => ['required'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'town' => ['required', 'max:255'],
            'service_provider' => [],
            'username' => [],
            'phone' => [],
            'suggest_time' => [],
            'message' => [],
        ]);
        $validated['ip'] = $request->ip();
        $psychologist = Psychologist::findOrFail($id);
        $psychologist->bookings()->create($validated);
        return redirect()->back();
    }
    public function showPayment(Request $request) {
        $pageTitle = 'Booking Payment';
        return view('landing.booking.payment', compact('pageTitle'));
    }
}
