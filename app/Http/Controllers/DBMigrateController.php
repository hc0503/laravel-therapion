<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Psychologist;

class DBMigrateController extends Controller
{
    public function psychologist()
    {
        $oldPsicologos = DB::table('psicologo')->get();
        foreach($oldPsicologos as $oldPsicologo) {
            Psychologist::create([
                'name' => $oldPsicologo->nombres_apellidos,
                'photo' => $oldPsicologo->foto,
                'email' => $oldPsicologo->email,
                'title' => $oldPsicologo->titulo,
                'info' => $oldPsicologo->informacion_adicional,
                'education' => $oldPsicologo->educacion,
                'topic' => $oldPsicologo->temas_consulta,
                'about' => $oldPsicologo->about,
                'country_code' => $oldPsicologo->id_equipo
            ]);
        }
        dd('Success');
    }
}
