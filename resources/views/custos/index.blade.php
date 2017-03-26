@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
Centro de Custos
@endsection

@section('contentheader_description')
Define os Centro de Custos Usados no Sistema
@endsection

<?php $i = 1; $tbody = [];?>
@foreach ($custos as $c)
	<?php
		$tbody[] = [
			$i++,
			['input.text' => ['value' => $c]],
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
			'Opções'
		],
		'tbody' => $tbody,
	])
	@endcomponent
@endsection