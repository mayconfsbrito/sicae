@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
Cotação
@endsection

@section('contentheader_description')
Cadastre ou altere uma cotação
@endsection


@section('main-content')
<div class="row">
	<div class='col-md-12'>
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class='box-title'>Informações</h3>
			</div>
			<form role='form'>
				<div class="box-body">
					@component('component.input.date', [
						'label' => 'Data'
					])
					@endcomponent
					@component('component.input.text', [
						'label' => 'Fornecedor'
					])
					@endcomponent
					@component('component.select.select', [
						'label' => 'Situação',
						'options' => $situcoes
					])
					@endcomponent
					 @component('component.select.select', [
						'label' => 'Centro de Custo',
						'options' => [
							'Administrativo',
							'Obra',
							'Planejamento',
							'Recursos Humanos',
							'Transporte'
						]
					])
					 @endcomponent
					 @component('component.select.select', [
					 	'label' => 'Obra',
					 	'options' => [
					 		'Edifício Protótipo',
					 		'Edifício Y',
					 		'Edifício Z',
					 		'Prédio Comercial X'
					 	]
					 ])
					 @endcomponent
				</div>
				<div class="box-footer">

				</div>
			</form>
		</div>
	</div>
</div>
<div class="row">
	<div class='col-md-12'>
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class='box-title'>Produtos</h3>
			</div>
			<div class="box-body">
				<table class="table table-bordered table-hover dataTabled">
					<thead>
						<th>Produto</th>
						<th>Centro de Custo</th>
						<th>Quantidade</th>
						<th>Preço Unitário</th>
						<th>Valor Total Produto</th>
					</thead>
					<tbody>
						<tr>
							<td>
								<select class="form-control select2" style="width: 100%;">
				                  <option selected="selected">Cano PVC</option>
				                  <option>Joelho PVC</option>
				                  <option>Ferragem</option>
				                  <option>Azulejo Branco</option>
				                  <option>Azulejo Creme</option>
				                  <option>Janela</option>
				                  <option>Porta</option>
				            	</select>
							</td>
							<td>
								<select class="form-control select2" style="width: 100%;">
				                  <option>Acabamento</option>
				                  <option>Estacionamento</option>
				                  <option>Fundação</option>
				                  <option>Financeiro</option>
				                  <option selected="selected">Hidráulica</option>
				                  <option>Recursos Humanos</option>
				                  <option>Transporte</option>
				            	</select>
							</td>
							<td>
								<div class="input-group">
				                	<input type="text" class="form-control" placeholder="Username" value="50">
				              	</div>
							</td>
							<td>
								<div class="input-group">
			                		<input type="text" class="form-control" placeholder="Username" value="10,00">
				              	</div>
							</td>
							<td>
								<div class="input-group">
			                		<input type="text" class="form-control" placeholder="Username" value="500,00">
				              	</div>
							</td>
						</tr>
						<tr>
							<td>
								<select class="form-control select2" style="width: 100%;">
				                  <option>Cano PVC</option>
				                  <option selected="selected">Joelho PVC</option>
				                  <option>Ferragem</option>
				                  <option>Azulejo Branco</option>
				                  <option>Azulejo Creme</option>
				                  <option>Janela</option>
				                  <option>Porta</option>
				            	</select>
							</td>
							<td>
								<select class="form-control select2" style="width: 100%;">
				                  <option>Acabamento</option>
				                  <option>Estacionamento</option>
				                  <option>Fundação</option>
				                  <option>Financeiro</option>
				                  <option selected="selected">Hidráulica</option>
				                  <option>Recursos Humanos</option>
				                  <option>Transporte</option>
				            	</select>
							</td>
							<td>
								<div class="input-group">
				                	<input type="text" class="form-control" placeholder="Username" value="10">
				              	</div>
							</td>
							<td>
								<div class="input-group">
			                		<input type="text" class="form-control" placeholder="Username" value="1,00">
				              	</div>
							</td>
							<td>
								<div class="input-group">
			                		<input type="text" class="form-control" placeholder="Username" value="100,00">
				              	</div>
							</td>
						</tr>
						<tr>
							<td>
								<select class="form-control select2" style="width: 100%;">
				                  <option>Cano PVC</option>
				                  <option>Joelho PVC</option>
				                  <option>Ferragem</option>
				                  <option selected="selected">Azulejo Branco</option>
				                  <option>Azulejo Creme</option>
				                  <option>Janela</option>
				                  <option>Porta</option>
				            	</select>
							</td>
							<td>
								<select class="form-control select2" style="width: 100%;">
				                  <option selected="selected">Acabamento</option>
				                  <option>Estacionamento</option>
				                  <option>Fundação</option>
				                  <option>Financeiro</option>
				                  <option>Hidráulica</option>
				                  <option>Recursos Humanos</option>
				                  <option>Transporte</option>
				            	</select>
							</td>
							<td>
								<div class="input-group">
				                	<input type="text" class="form-control" placeholder="Username" value="25">
				              	</div>
							</td>
							<td>
								<div class="input-group">
			                		<input type="text" class="form-control" placeholder="Username" value="100,00">
				              	</div>
							</td>
							<td>
								<div class="input-group">
			                		<input type="text" class="form-control" placeholder="Username" value="2500,00">
				              	</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class='col-md-12'>
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class='box-title'>Totais</h3>
			</div>
			<form role='form'>
				<div class="box-body">
					<div class="form-group">
						<!-- <div class="col-lg-6"> -->
                  			<!-- <div class="input-group"> -->
                  				<label for='data'>Descontos</label>
								<input type='text' class='form-control' id='data' name='descontos' value="100,00"/>
                  			<!-- </div> -->
                  	</div>
                  	<div class="form-group">
                  		<!-- </div> -->
                  		<!-- <div class="col-lg-6"> -->
                  			<!-- <div class="input-group"> -->
                  				<label for='data'>Valor Total</label>
								<input type='text' class='form-control' id='data' name='valorTotal' value="3.000,00"/>
                  			<!-- </div> -->
                  		<!-- </div> -->

					</div>
				</div>
				<div class="box-footer">
					<div>
						<button type="button" class="btn btn-primary">Gravar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection