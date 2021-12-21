

<?php $__env->startSection('title'); ?>
Student
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
  <h1>Student</h1>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Password</th>

    </tr>
  </thead>
  <tbody>
  	<?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  		<tr>
  			<th scope="row"><?php echo e($student->name); ?></th>
      		<td class="pas"><?php echo e($student->password); ?></td>
      	</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <td colspan="3">No record found</td>
    <?php endif; ?>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\prueba_tecnica\resources\views/student.blade.php ENDPATH**/ ?>