<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArtigosFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Artigo;
use App\tempview;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function captura()
    {
        $temps = tempview::all();

        return view('/captura', compact('temps'));
    }

    public function salvo()
    {
        $registros = artigo::all();

        return view('/salvo', compact('registros'));
    }

    public function del($id)
    {
        artigo::find($id)->delete();
        return redirect()->route('salvo');
    }
    
    public function artigosSave(Request $request)
    {
        $dados = $request["array"];
         

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            tempview::where('id_usuario', '!=', 0)->delete();

            $qtd = 0;
            $iduser = (Auth::user()->id);

            if (isset($request["array"])) {
                foreach ($request["array"] as $dados) {
                    $titulo = $dados["titulo"];
                    $link = $dados["link"];
                    $img = $dados["img"];
    
                    $tempview = new tempview();
  
                    $tempview->id_usuario = $iduser;
                    $tempview->titulo = $titulo;
                    $tempview->link = $link;
                    $tempview->img = $img;
                    $tempview->save();
                    $tempview = null;
                    $qtd++;

                    $verificaDB = Artigo::where(
                        'titulo',
                        '=',
                        $titulo
                    )->where(
                        'link',
                        '=',
                        $link
                    )->first();

                    if (is_null($verificaDB)) {
                        $artigo = new Artigo();
                        $artigo->id_usuario = $iduser;
                        $artigo->titulo = $titulo;
                        $artigo->link = $link;
                        $artigo->save();
                        $artigo = null;
                    }
                }
                return response()->json(['success' => $qtd]);
            }
        }
    }
}
