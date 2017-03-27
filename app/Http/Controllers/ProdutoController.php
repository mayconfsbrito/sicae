<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
    	$produtos = [
    		'Cano de PVC 3/4',
    		'Janela de Ferro',
    		'Janela de Vidro',
    		'Janela Colonial',
    		'Joelho PVC 3/4',
    	];

    	$classes = [
    		'Acabamento',
			'Alvenaria',
			'Fundação',
			'Elétrica',
    	];

    	return View('produto/index')->with([
    		'classes' => $classes,
    		'produtos' => $produtos,
    	]);
    }
}
