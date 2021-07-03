<?php

namespace App\Http\Controllers;

use App\Models\Treinador;
use Illuminate\Http\Request;

class TreinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.listar.treinadores')->with('treinadores', Treinador::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.criar.treinadores');
    }

    public function show($id)
    {

        return view('pages.ver.treinadores')->with('treinador', Treinador::find($id));
    }


    public function edit($id)
    {
        return view('pages.editar.treinadores')->with('treinador', Treinador::find($id));
    }

    public function animais($id)
    {
        return view('pages.listar.animais')->with('animais', Treinador::find($id)->animais);
    }
}
