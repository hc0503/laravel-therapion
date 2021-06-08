<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    private $pageTitle;

    public function __construct()
    {

    }
    public function index()
    {
        $pageTitle = 'Welcome';
        
        return view('landing.index', compact('pageTitle'));
    }
}
