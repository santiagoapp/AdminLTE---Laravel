@extends('adminlte::page')

@section('title', 'AdminLTE')

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
							<th>ID</th>
							<th>OT(ID)</th>
							<th>Solicita</th>
							<th>Autoriza</th>
							<th>Cliente</th>
							<th>Fecha</th>
							<th>Num. items</th>
							<th>Items</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>ID</td>
							<td>OT(ID)</td>
							<td>Solicita</td>
							<td>Autoriza</td>
							<td>Cliente</td>
							<td>Fecha</td>
							<td>4</td>
							<td>
								<a href="#" class="btn btn-default btn-block" role="button">Ver Items</a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>OT(ID)</th>
							<th>Solicita</th>
							<th>Autoriza</th>
							<th>Cliente</th>
							<th>Fecha</th>
							<th>Num. items</th>
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