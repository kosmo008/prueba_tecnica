<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default bg-white shadow-sm">
			<ul class="nav nav-pills">
				<li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo e(route('student')); ?>">Students</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo e(route('lesson')); ?>">Lessons</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo e(route('assing')); ?>">Assaing a Lesson </a></li>
			</ul>
		</nav>
	</div>

	<?php echo $__env->yieldContent('content'); ?>

</body>
</html><?php /**PATH C:\laragon\www\prueba_tecnica\resources\views/layout.blade.php ENDPATH**/ ?>