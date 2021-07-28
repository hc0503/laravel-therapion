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
    public function index()
    {
        $pageTitle = 'Welcome';
        return view('landing.index', compact('pageTitle'));
    }
    public function book()
    {
        $pageTitle = 'Appointment Scheduling and Booking';
        $locale = session()->get('locale') ?? 'en';
        $psychologists = Psychologist::query()->where('country_code', $locale)->get();

        return view('landing.book', compact('pageTitle', 'psychologists'));
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
    public function dbMigrate()
    {
        $oldPsicologos = DB::table('psicologo')->where('id_equipo', '1')->get();
        foreach($oldPsicologos as $oldPsicologo) {
            Psychologist::create([
                'name' => $oldPsicologo->nombres_apellidos,
                'photo' => $oldPsicologo->foto,
                'email' => $oldPsicologo->email,
                'title' => $oldPsicologo->titulo,
                'info' => $oldPsicologo->informacion_adicional,
                'education' => $oldPsicologo->educacion,
                'topic' => $oldPsicologo->temas_consulta,
                'about' => $oldPsicologo->about
            ]);
        }
        dd('Success');
    }
}
