@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Cotações</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-hover dataTabled">
							<thead>
								<th>Código</th>
								<th>Data</th>
								<th>Obra</th>
								<th>Valor Total</th>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>{{ date('d/m/Y') }}</td>
									<td>Prédio Residencial X</td>
									<td>2.561,90</td>
								</tr>
								<tr>
									<td>002</td>
									<td>{{ date('d/m/Y') }}</td>
									<td>Prédio Comercial da Raja</td>
									<td>316,11</td>
								</tr>
								<tr>
									<td>003</td>
									<td>{{ date('d/m/Y') }}</td>
									<td>Edifício Protótipo</td>
									<td>61,90</td>
								</tr>
								<tr>
									<td>004</td>
									<td>{{ date('d/m/Y') }}</td>
									<td>Prédio Residencial X</td>
									<td>8.500,00</td>
								</tr>
								<tr>
									<td>005</td>
									<td>{{ date('d/m/Y') }}</td>
									<td>Prédio Residencial X</td>
									<td>1.311,00</td>
								</tr>
								<tr>
									<td>006</td>
									<td>{{ date('d/m/Y') }}</td>
									<td>Prédio Residencial X</td>
									<td>1.200,50</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection