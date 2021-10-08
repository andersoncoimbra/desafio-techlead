<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LivroAlterar;
use App\Livro;

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
        $livros = Livro::all();
        return view('home', ['livros'=> $livros]);
    }

    public function registro(Request $request)
    {
        $msg = [
            'titulo.required' => 'Campo Titulo não pode ser vazio!',
            'autor.required'  => 'Campo Autor não pode ser vazio!'
        ];

        Validator::make($request->all(), [
            'titulo' => 'required',
            'autor' => 'required',
        ], $msg)->validate();

        $livro = new Livro();
        $livro->user_id = auth()->user()->id;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->save();

        return redirect()->back();
    }

    public function livro(Livro $livro)
    {
        $livros = Livro::all();
        return view('livro', ['livros'=> $livros, 'livro'=>  $livro]);
    }

    public function alterar(LivroAlterar $request, Livro $livro)
    {       
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->update();
        return redirect()->route('home');
    }

    public function excluir(Request $request, Livro $livro)
    {
        $livro->delete();
        return redirect()->route('home');

    }
}

    