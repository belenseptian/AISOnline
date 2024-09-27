@if (session('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	<strong>{{ session('status') }}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif
<div class="row">
	<!-- recent orders  -->
	<!-- ============================================================== -->
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Dashboard</h5>
			<div class="card-body p-4">
				<table class="table4" id="table4">
					<thead>
						<tr>
							<th class="text-center">MMSI</th>
							<th class="text-center">Longitude</th>
							<th class="text-center">Latitude</th>
						</tr>
					</thead>
					<tbody>
						@foreach($log as $item)
						<tr>
							<td>{{ $item->mmsi }}</td>
							<td>{{ $item->lon }}</td>
							<td>{{ $item->lat }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>