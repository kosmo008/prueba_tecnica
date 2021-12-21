

<?php $__env->startSection('title'); ?>
Create a New Assign
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<h1>Create a New Assign </h1>
	<br>
	<form method="POST" action="<?php echo e(route('assing.store')); ?>">
		<?php echo csrf_field(); ?>
	  	<div class="mb-3">
	  		<div class="form-group">
	  			<label for="student_id">Student Name</label>
	  			<select
	  				name="student_id"
	  				id="student_id"
	  				class="form-control border-0 bg-light shadow-sm"
	  			>
	  			<option value="">Select an option...</option>
	  			<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  				<option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
	  			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  			</select>
	  			<?php echo $errors->first('student_id', '<small>:message</small><br>'); ?>

	  		</div>
		</div>
		<div class="mb-3">
	  		<div class="form-group">
	  			<label for="lesson_id">Lesson</label>
	  			<select
	  				name="lesson_id"
	  				id="lesson_id"
	  				class="form-control border-0 bg-light shadow-sm"
	  				>
	  				<option value="">Select an option...</option>
	  				<?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  				<option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
	  				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  			</select>
	  			<?php echo $errors->first('lesson_id', '<small>:message</small><br>'); ?>

	  		</div>
		</div>


	  	<button type="submit" class="btn btn-primary">Submit</button>
	</form>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\prueba_tecnica\resources\views/create.blade.php ENDPATH**/ ?>