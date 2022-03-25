<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>
 
<h1>Data Pegawai</h1>
<h3>www.malasngoding.com</h3>
 
<ul>
	<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e("Nama : ". $p->nama . ' | Alamat : ' . $p->alamat); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
 
</body>
</html><?php /**PATH E:\xampp\New folder\htdocs\laravel_semester4\04_praktikum_web_lanjut\resources\views/pegawai.blade.php ENDPATH**/ ?>