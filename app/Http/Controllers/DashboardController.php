<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Planta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getFamilia()
    {
        try {
            $familias = Planta::all()
                ->map(fn ($planta) => $planta->especie->familia)
                ->toarray();

            $familia = array_count_values($familias);
            arsort($familia);
            $familia = array_key_first($familia);
        } catch (\Throwable $th) {
            $familia = null;
        }

        return $familia;
    }

    public function getAnimal()
    {

        try {
            $idade_maxima = DB::table('animals')->max('idade');

            $animal =  DB::table('animals')
                ->where('participa_em_shows', 1)
                ->where('cativeiro', 0)
                ->where('idade', $idade_maxima)
                ->get()[0];
        } catch (\Throwable $th) {
            $animal = null;
        }

        return $animal;
    }

    public function index()
    {






        return view('pages.dashboard', ['animal' => $this->getAnimal(), 'familia' => $this->getFamilia()]);
    }
}
