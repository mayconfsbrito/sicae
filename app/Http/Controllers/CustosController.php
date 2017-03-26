<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustosController extends Controller
{
    public function index()
    {
    	$custos = [
    		'Administrativo',
			'Obra',
			'Planejamento',
			'Recursos Humanos',
			'Transporte'
    	];

    	return View('custos/index', ['custos' => $custos]);
    }
}
