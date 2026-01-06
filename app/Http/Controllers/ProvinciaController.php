<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provincia;

class ProvinciaController extends Controller
{
    public function index(){
        
        $provincias = Provincia::all();

        return view('provincias.index',compact('provincias'));
    }

}
