

<?php $__env->startSection('title'); ?>
Student
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>Student</h1>
<div class="container">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>

    </tr>
  </thead>
  <tbody>

  		<tr>
  			<th scope="row"></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>

  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\prueba_tecnica\resources\views/Student.blade.php ENDPATH**/ ?>