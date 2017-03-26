@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
Obras
@endsection

@section('contentheader_description')
Define Obras Que São Gerenciadas Pelo Sistema
@endsection

<?php $i = 1; $tbody = [];?>
@foreach ($obras as $o)
	<?php
		$tbody[] = [
			$i++,
			['input.text' => ['value' => $o]],
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