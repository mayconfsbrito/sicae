@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
Usuários e Alçadas
@endsection

@section('contentheader_description')
Define os Usuários e Suas Responsabilidades no Sistema
@endsection

<?php $i = 1; ?>
@section('main-content')
<div class="row">
	<div class='col-md-12'>
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class='box-title'>Informações</h3>
			</div>
			<form role='form'>
				<div class="box-body">
				@component('component.table.table', [
					'thead' => [
						'Sequência de Aprovação',
						'Alçada',
						'Email do Usuário',
						'Nome do Usuário'
					],
					'tbody' => [
						[
							[
								'input.text' =>
								[
									'value' => $i++
								]
							],
							'Comprador',
							['input.mail' =>
								[
									'value' => 'jose@intacta.com.br'
								]
							],
							['input.text' =>
								[
									'value' => 'jose'
								]
							],
						],
						[
							[
								'input.text' =>
								[
									'value' => $i++
								]
							],
							'Engenheiro',
							['input.mail' =>
								[
									'value' => 'luiz@intacta.com.br'
								]
							],
							['input.text' =>
								[
									'value' => 'luiz'
								]
							],
						],
						[
							[
								'input.text' =>
								[
									'value' => $i++
								]
							],
							'Analista Financeiro',
							['input.mail' =>
								[
									'value' => 'maria@intacta.com.br'
								]
							],
							['input.text' =>
								[
									'value' => 'maria'
								]
							],
						],
						[
							[
								'input.text' =>
								[
									'value' => $i++
								]
							],
							'Diretor de Projetos',
							['input.mail' =>
								[
									'value' => 'junior@intacta.com.br'
								]
							],
							['input.text' =>
								[
									'value' => 'junior'
								]
							],
						],
						[
							[
								'input.text' =>
								[
									'value' => $i++
								]
							],
							'Diretor Financeiro',
							['input.mail' =>
								[
									'value' => 'marta@intacta.com.br'
								]
							],
							['input.text' =>
								[
									'value' => 'marta'
								]
							],
						],
						[
							[
								'input.text' =>
								[
									'value' => $i++
								]
							],
							'Diretor de Operações',
							['input.mail' =>
								[
									'value' => 'arlete@intacta.com.br'
								]
							],
							['input.text' =>
								[
									'value' => 'arlete'
								]
							],
						],
						[
							[
								'input.text' =>
								[
									'value' => $i++
								]
							],
							'Diretor Financeiro',
							['input.mail' =>
								[
									'value' => 'juliana@intacta.com.br'
								]
							],
							['input.text' =>
								[
									'value' => 'juliana'
								]
							],
						],
						[
							[
								'input.text' =>
								[
									'value' => $i++
								]
							],
							'Administrador',
							['input.mail' =>
								[
									'value' => 'luciano@intacta.com.br'
								]
							],
							['input.text' =>
								[
									'value' => 'luciano'
								]
							],
						],
					]
				])
				@endcomponent
				</div>
			</form>
			<div class="box-footer">
				@component('component.buttom.buttom',[
					'label' => 'Confirmar',
					'class' => 'btn-primary',
				])
				@endcomponent
			</div>
		</div>
	</div>
</div>
@endsection