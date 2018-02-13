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
							<th>Nombre</th>
							<th>Email</th>
							<th>Permisos</th>
							<th>Created At</th>
							<th>Updated At</th>
							<th>Estado</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>
								<div class="btn-group btn-group-justified" role="group">
									<a href="#" class="btn btn-primary" role="button">Compras</a>
									<a href="#" class="btn btn-default" role="button">Ventas</a>
									<a href="#" class="btn btn-default" role="button">Producción</a>
								</div>
								<div class="btn-group btn-group-justified" role="group">
									<a href="#" class="btn btn-default" role="button">Ingeniería</a>
									<a href="#" class="btn btn-default" role="button">Contabilidad</a>
									<a href="#" class="btn btn-default" role="button">Rq. Humanos</a>
								</div>
								<div class="btn-group btn-group-justified" role="group">
									<a href="#" class="btn btn-default" role="button">Laboratorio</a>
									<a href="#" class="btn btn-default" role="button">Almacén</a>
									<a href="#" class="btn btn-default" role="button">Gerencia</a>
								</div>
								<div class="btn-group btn-group-justified" role="group">
									<a href="#" class="btn btn-default" role="button">Super Su</a>
								</div>
							</td>
							<td>{{ $user->created_at }}</td>
							<td>{{ $user->updated_at }}</td>
							<td>
								<a href="#" class="btn btn-success fa fa-check" role="button"></a>

							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Permisos</th>
							<th>Created At</th>
							<th>Updated At</th>
							<th>Estado</th>
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