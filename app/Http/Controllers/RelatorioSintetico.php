<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class RelatorioSintetico extends Controller
{
    public function index()
    {
    	$pdf = PDF::loadView('pdf/relatorio_sintetico');
    	return $pdf->stream();
    }
}
