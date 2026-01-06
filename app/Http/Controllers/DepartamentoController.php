<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function index(){

        $departamentos = Departamento::with('provincia')->get();

        return view('departamentos.index', compact('departamentos'));

    }
}
