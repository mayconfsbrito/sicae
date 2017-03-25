@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
Cotações
@endsection

@section('contentheader_description')
Pesquise por cotações cadastradas
@endsection

@section('main-content')

<div class="row">
<!-- left column -->
<div class="col-md-12">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Filtros de Pesquisa</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form">
    	<div class="box-body">
    		<div class="form-group">
    			<label>Código</label>
    			<input type="text" class="form-control" placeholder="Username" value="">
    		</div>
	        <div class="form-group">
	            <label>Situação</label>
	            <select class="form-control select2" style="width: 100%;">
	              <option>Aprovada</option>
	              <option>Indefinida</option>
	              <option selected="selected">Reprovada</option>
	        	</select>
	        </div>
	        <div class="form-group">
                <label>Período:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
	    </div>
	    <div class="box-footer">
	    	<button type="button" class="btn btn-primary">Pesquisar</button>
	    	<button type="button" class="btn">Limpar</button>
		</div>
    </form>
  </div>
</div>
</div>
<div class="row">
	<div class="col-md-12">

		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Cotações</h3>
			</div>
			<div class="box-body">
				<a href="cadastrar">
					<button type="button" class="btn btn-success">Nova Cotação</button>
				</a>
			</div>
			<div class="box-body">
				<table class="table table-bordered table-hover dataTabled">
					<thead>
						<th>Código</th>
						<th>Data</th>
						<th>Obra</th>
						<th>Fornecedor</th>
						<th>Valor Total</th>
						<th>Situação</th>
						<th>Visualizar</th>
					</thead>
					<tbody>
						<tr>
							<td>001</td>
							<td>{{ date('d/m/Y') }}</td>
							<td>Móveis Tubulares</td>
							<td>Prédio Residencial X</td>
							<td>3.000,00</td>
							<td><span class="glyphicon glyphicon-remove red" title="Reprovado"></span></td>
							<td>
								<a href="cotacao">
									<span class="glyphicon glyphicon-pencil"></span>
								</a>
							</td>
						</tr>
						<tr>
							<td>002</td>
							<td>{{ date('d/m/Y') }}</td>
							<td>Loja Elétrica</td>
							<td>Prédio Comercial da Raja</td>
							<td>316,11</td>
							<td><span class="glyphicon glyphicon-ok green" title="Aprovado"></span></td>
							<td>
								<a href="cotacao">
									<span class="glyphicon glyphicon-pencil"></span>
								</a>
							</td>
						</tr>
						<tr>
							<td>003</td>
							<td>{{ date('d/m/Y') }}</td>
							<td>Pão de Açúcar</td>
							<td>Edifício Protótipo</td>
							<td>61,90</td>
							<td><span class="glyphicon glyphicon-ok green" title="Aprovado"></span></td>
							<td>
								<a href="cotacao">
									<span class="glyphicon glyphicon-pencil"></span>
								</a>
							</td>
						</tr>
						<tr>
							<td>004</td>
							<td>{{ date('d/m/Y') }}</td>
							<td>Leroy Merlin</td>
							<td>Prédio Residencial X</td>
							<td>8.500,00</td>
							<td><span class="glyphicon glyphicon-ok green" title="Aprovado"></span></td>
							<td>
								<a href="cotacao">
									<span class="glyphicon glyphicon-pencil"></span>
								</a>
							</td>
						</tr>
						<tr>
							<td>005</td>
							<td>{{ date('d/m/Y') }}</td>
							<td>Leroy Merlin</td>
							<td>Prédio Residencial X</td>
							<td>1.311,00</td>
							<td><span class="glyphicon glyphicon-remove red" title="Reprovado"></span></td>
							<td>
								<a href="cotacao">
									<span class="glyphicon glyphicon-pencil"></span>
								</a>
							</td>
						</tr>
						<tr>
							<td>006</td>
							<td>{{ date('d/m/Y') }}</td>
							<td>Itatiaia</td>
							<td>Prédio Residencial X</td>
							<td>1.200,50</td>
							<td><span class="glyphicon glyphicon-ok green" title="Aprovado"></span></td>
							<td>
								<a href="cotacao">
									<span class="glyphicon glyphicon-pencil"></span>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

	</div>
</div>
@endsection