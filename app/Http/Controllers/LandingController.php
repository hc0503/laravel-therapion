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
    public function getHome()
    {
        $pageTitle = 'Home';
        return view('landing.home', compact('pageTitle'));
    }
    public function getBooking()
    {
        $pageTitle = 'Appointment Scheduling and Booking';
        $locale = app()->getLocale() ?? 'en';
        $psychologists = Psychologist::query()->where('country_code', $locale)->get();

        return view('landing.booking.all', compact('pageTitle', 'psychologists'));
    }
    public function getDetails(Psychologist $psychologist)
    {
        $pageTitle = 'Booking Details';
        return view('landing.booking.details', compact('pageTitle', 'psychologist'));
    }
    public function getServices()
    {
        $pageTitle = 'Services All';

        return view('landing.services.all', compact('pageTitle'));
    }
    public function getIndividuals()
    {
        $pageTitle = 'Individual psychotherapy and counseling';

        return view('landing.services.individuals', compact('pageTitle'));
    }
    public function getCouplesAndFamilies()
    {
        $pageTitle = 'Couples and families';

        return view('landing.services.couples-and-families', compact('pageTitle'));
    }
    public function getCommunities()
    {
        $pageTitle = 'Community services';

        return view('landing.services.communities', compact('pageTitle'));
    }
    public function getStartups()
    {
        $pageTitle = 'Mental health for startups';

        return view('landing.services.startups', compact('pageTitle'));
    }
    public function getFeeCost()
    {
        $pageTitle = 'Fees and Costs';
        return view('landing.fee-cost', compact('pageTitle'));
    }
    public function getJobs()
    {
        $pageTitle = 'Jobs';
        return view('landing.jobs', compact('pageTitle'));
    }
    public function getTraining()
    {
        $pageTitle = 'Training';
        return view('landing.training', compact('pageTitle'));
    }
    public function getContactUs()
    {
        $pageTitle = 'Contact Us';
        return view('landing.contact-us', compact('pageTitle'));
    }
    public function getTermsOfService()
    {
        $pageTitle = 'Terms of Service';
        return view('landing.terms-of-service', compact('pageTitle'));
    }
    public function getPrivacyPolicy()
    {
        $pageTitle = 'Privacy Policy';
        return view('landing.privacy-policy', compact('pageTitle'));
    }
    public function getAboutUs()
    {
        $pageTitle = 'About Us';
        return view('landing.about-us', compact('pageTitle'));
    }
    public function getFriends()
    {
        $pageTitle = 'Friends';
        return view('landing.friends', compact('pageTitle'));
    }
}
