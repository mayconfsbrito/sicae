<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class CotacaoController extends Controller
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

	public function index()
	{
		return view('cotacao/listar');
	}

	public function cadastrar()
	{
		\View::share([
			'contentheader_title' => 'TESTE'
		]);
		return view('cotacao/cotacao');
	}

	public function cotacao()
	{
		$dados = [
			
		];

		return view('cotacao/cotacao')
			->with($dados);
	}
}
