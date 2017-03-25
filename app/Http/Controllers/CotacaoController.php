<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class CotacaoController extends Controller
{

	private $situacoes = ['Aprovada', 'Indefinida', 'Reprovada'];

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
		$dados = [
			'situcoes' => $this->situacoes
		];

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
			'situcoes' => $this->situacoes
		];

		return view('cotacao/cotacao')
			->with($dados);
	}
}
