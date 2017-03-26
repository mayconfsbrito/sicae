<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObraController extends Controller
{

	public function index()
	{
		$obras = [
			'Edifício Protótipo',
			'Edifício Z',
			'Prédio Comercial da Raja',
			'Prédio Residencial X',
		];

		return View('obra/index')->with('obras', $obras);
	}
}
