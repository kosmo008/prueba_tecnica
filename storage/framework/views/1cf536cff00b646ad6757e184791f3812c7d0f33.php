

<?php $__env->startSection('title'); ?>
Lesson
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
  <h1>Lessons</h1>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Last update</th>


    </tr>
  </thead>
  <tbody>
  	<?php $__empty_1 = true; $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  		<tr>
  			<th scope="row"><?php echo e($lesson->name); ?></th>
  			<th scope="col"><?php echo e($lesson->updated_at->diffForHumans()); ?></th>
      	</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <td colspan="2">No record found</td>
    <?php endif; ?>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\prueba_tecnica\resources\views/lesson.blade.php ENDPATH**/ ?>