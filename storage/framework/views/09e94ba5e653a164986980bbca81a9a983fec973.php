<?php if(session('status')): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	<strong><?php echo e(session('status')); ?></strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<?php endif; ?>
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
						<?php $__currentLoopData = $log; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($item->mmsi); ?></td>
							<td><?php echo e($item->lon); ?></td>
							<td><?php echo e($item->lat); ?></td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div><?php /**PATH C:\xampp\htdocs\aisparser\resources\views/backend/dashboard.blade.php ENDPATH**/ ?>