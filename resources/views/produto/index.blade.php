@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
Produtos
@endsection

@section('contentheader_description')
Define os Produtos Existentes no Sistema
@endsection

<?php $i = 1; $tbody = [];?>
@foreach ($produtos as $p)
	<?php
		$tbody[] = [
			$i++,
			['input.text' => ['value' => $p]],
			['select.select' => ['options' => $classes]],
			['buttom' => ['label' => 'Alterar', 'class' => 'btn-primary']],
			['buttom' => ['label' => 'Excluir', 'class' => 'btn-danger']]
		];
	?>
@endforeach

@section('main-content')
	@component('component.table.table', [
		'thead' => [
			'Código',
			'Descrição',
			'Classe do Produto',
			'Opções'
		],
		'tbody' => $tbody,
	])
	@endcomponent
@endsection