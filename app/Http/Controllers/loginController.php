<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('artigosList');
    }
    public function entrar(request $req)
    {
        $dados = $req->all();
        if(auth::attempt(['usuario'=>$dados['usuario'],'senha'=>$dados['senha']]))
        {
            return redirect()->route('artigosList');
        }
    }
    public function sair(){
        auth::logout();
        return redirect()->route('artigosList');
    }
}
