<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class RelatorioApartamento extends Controller
{
    public function index()
    {
    	$pdf = PDF::loadView('pdf/relatorio_apartamento');
    	return $pdf->stream();
    }
}
