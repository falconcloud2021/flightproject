<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo $__env->yieldContent('title', 'Магазин цифровой техники'); ?></title>
	<link rel="stylesheet" href="/resources/template/css/components.css">
	<link rel="stylesheet" href="/resources/template/css/icons.css">
	<link rel="stylesheet" href="/resources/template/css/responsee.css">
	<link rel="stylesheet" href="/resources/template/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="/resources/template/owl-carousel/owl.theme.css">
	<!-- CUSTOM STYLE -->
	<link rel="stylesheet" href="/resources/template/css/template-style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="/resources/template/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/resources/template/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/resources/template/js/validation.js"></script>
	<!-- BASKET STYLE -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

	<body class="size-1140">

		<!-- HEADER -->
		<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- MAIN -->
		<main role="main">
		<!-- Content -->
		<?php echo $__env->yieldContent('content'); ?>
		</main>

		<!--FOOTER -->
		<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<script type="text/javascript" src="/resources/template/js/responsee.js"></script>
		<script type="text/javascript" src="/resources/template/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="/resources/template/js/template-scripts.js"></script>

	</body>
</html><?php /**PATH W:\domains\flightproject\app\Views/layouts/default.blade.php ENDPATH**/ ?>