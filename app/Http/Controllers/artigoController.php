<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Session;
use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use App\artigo;

class artigoController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function list()
    {
        $registros = artigo::all();
        return view('artigo',compact('registros'));
    }

    public function add(){
        return "index";
    }

    public function save(){
        return "index";
    }

    public function del($id){
        artigo::find($id)->delete();
        return redirect()->route('artigosList');
    }

}