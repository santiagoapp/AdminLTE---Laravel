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
							<th>Name</th>
							<th>Type</th>
							<th>Danger Level</th>
							<th>Created At</th>
							<th>Updated At</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($bears as $bear)
						<tr>
							<td>{{ $bear->id }}</td>
							<td>{{ $bear->name }}</td>
							<td>{{ $bear->type }}</td>
							<td>{{ $bear->danger_level }}</td>
							<td>{{ $bear->created_at }}</td>
							<td>{{ $bear->updated_at }}</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Type</th>
							<th>Danger Level</th>
							<th>Created At</th>
							<th>Updated At</th>
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