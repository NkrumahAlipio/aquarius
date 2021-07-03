<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    public function index()
    {
        return view('pages.listar.plantas')->with('plantas', Planta::all());
    }

    public function create()
    {
        return view('pages.criar.plantas');
    }

    public function show($id)
    {
        return view('pages.ver.plantas')->with('planta', Planta::find($id));
    }

    public function edit($id)
    {
        return view('pages.editar.plantas')->with('planta', Planta::find($id));
    }
}
