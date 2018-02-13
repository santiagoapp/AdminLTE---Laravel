@extends('adminlte::page')

@section('title', 'ver-registros')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Hover Data Table</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>OT</th>
							<th>Cliente</th>
							<th>Vendedor</th>
							<th>Fecha</th>
							<th>RQ</th>
							<th>RV</th>
							<th>FR</th>
							<th>RC</th>
							<th>CN</th>
							<th>Items</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>OT</td>
							<td>Cliente</td>
							<td>Vendedor</td>
							<td>Fecha</td>
							<td>RQ</td>
							<td>RV</td>
							<td>FR</td>
							<td>RC</td>
							<td>CN</td>
							<td>Items</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>OT</th>
							<th>Cliente</th>
							<th>Vendedor</th>
							<th>Fecha</th>
							<th>RQ</th>
							<th>RV</th>
							<th>FR</th>
							<th>RC</th>
							<th>CN</th>
							<th>Items</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->		
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
@stop

@section('js')
<script>
	$(function () {
		$('#example2').DataTable({
			buttons: [
			'copy', 'excel', 'pdf'
			],
			'paging'      : true,
			'lengthChange': false,
			'searching'   : true,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : true
		})
	})
</script>
@stop