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

	/**
	 * Listagem de cotações
	 *
	 * @return     view
	 */
	public function index()
	{
		$dados = [
			'situcoes' => $this->situacoes
		];

		return view('cotacao/listar');
	}

	/**
	 * Cadastro de cotação
	 *
	 * @return     view
	 */
	public function cadastrar()
	{
		\View::share([
			'contentheader_title' => 'TESTE'
		]);
		return view('cotacao/cotacao');
	}

	/**
	 * Consulta ou alteração de cotação
	 *
	 * @return     view
	 */
	public function cotacao()
	{
		$dados = [
			'situcoes' => $this->situacoes
		];

		return view('cotacao/cotacao')
			->with($dados);
	}
}
