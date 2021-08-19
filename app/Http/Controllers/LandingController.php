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
    public function individuals()
    {
        $pageTitle = 'Individual psychotherapy and counseling';

        return view('landing.services.individuals', compact('pageTitle'));
    }
    public function couplesAndFamilies()
    {
        $pageTitle = 'Couples and families';

        return view('landing.services.couples-and-families', compact('pageTitle'));
    }
    public function communities()
    {
        $pageTitle = 'Community services';

        return view('landing.services.communities', compact('pageTitle'));
    }
    public function startups()
    {
        $pageTitle = 'Mental health for startups';

        return view('landing.services.startups', compact('pageTitle'));
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
