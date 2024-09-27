<?php $__env->startSection('title'); ?>

<?php if(!isset($name) || $name==''): ?>
<?php echo e('Home'); ?>

<?php elseif($name=='live-cctv'): ?>
<?php echo e('Live CCTV'); ?>

<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header-text'); ?>
<?php ($navbar = 'Home'); ?>
<?php if(!isset($name) || $name==''): ?>
<?php ($navbar = 'Home'); ?>
<?php elseif($name=='live-cctv'): ?>
<?php ($navbar = 'Live CCTV'); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<?php if(!isset($name) || $name==''): ?>
<?php echo e(''); ?>

<?php elseif($name=='live-cctv'): ?>
<li class="breadcrumb-item active" aria-current="page">Live CCTV</li>
<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<?php if(!isset($name) || $name==''): ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($name=='live-cctv'): ?>
<?php echo $__env->make('backend.live-cctv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
<script>
	window.location.href = "<?php echo e(url('/')); ?>/error";
</script>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aisparser\resources\views/backend/index.blade.php ENDPATH**/ ?>