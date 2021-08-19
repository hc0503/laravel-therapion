<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Psychologist;

class LandingController extends Controller
{
    private $pageTitle;

    public function __construct()
    {

    }
    public function home()
    {
        $pageTitle = 'Home';
        return view('landing.index', compact('pageTitle'));
    }
    public function book()
    {
        $pageTitle = 'Appointment Scheduling and Booking';
        $locale = session()->get('locale') ?? 'en';
        $psychologists = Psychologist::query()->where('country_code', $locale)->get();

        return view('landing.book', compact('pageTitle', 'psychologists'));
    }
    public function services()
    {
        $pageTitle = 'Services All';

        return view('landing.services.all', compact('pageTitle'));
    }
    public function psychotherapy()
    {
        $pageTitle = 'Individual psychotherapy and counseling';

        return view('landing.services.psychotherapy', compact('pageTitle'));
    }
    public function couples()
    {
        $pageTitle = 'Couples and families';

        return view('landing.services.couples', compact('pageTitle'));
    }
    public function community()
    {
        $pageTitle = 'Community services';

        return view('landing.services.community', compact('pageTitle'));
    }
    public function health()
    {
        $pageTitle = 'Mental health for startups';

        return view('landing.services.health', compact('pageTitle'));
    }
    public function fee_cost()
    {
        $pageTitle = 'Fees and Costs';
        return view('landing.fee_cost', compact('pageTitle'));
    }
    public function service()
    {
        $pageTitle = 'Our Services';
        return view('landing.service', compact('pageTitle'));
    }
    public function jobs()
    {
        $pageTitle = 'Jobs';
        return view('landing.jobs', compact('pageTitle'));
    }
}
