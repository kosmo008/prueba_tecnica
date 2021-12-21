

<?php $__env->startSection('title'); ?>
Assing a Lesson
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
  <h1>Assing a Lesson</h1>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Name Student</th>
      <th scope="col">Email</th>
      <th scope="col">Lesson</th>
    </tr>
  </thead>
  <tbody>
  	<?php $__empty_1 = true; $__currentLoopData = $StudentLessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $studentlesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  		<tr>
  			<th scope="row"><?php echo e($studentlesson->student->name); ?></th>
         <td><?php echo e($studentlesson->lesson->email); ?></td>
      		<td><?php echo e($studentlesson->lesson->name); ?></td>
      	</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <td colspan="3">No record found</td>
    <?php endif; ?>

  </tbody>
</table>
<a href="<?php echo e(route('assing.create')); ?>" class="btn btn-primary" >ADD NEW</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\prueba_tecnica\resources\views/assingalesson.blade.php ENDPATH**/ ?>