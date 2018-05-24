<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INGRESAR</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	
</head>
<body>
<form action="/ingreso" method="get">
	<h2>INGRESAR</h2>

	<?php if (!isset($_SESSION['facebook'])): ?>
		<a href="<?php echo $helper->getLoginUrl($config['scopes']); ?>" class="btn btn-primary">Iniciar sesión con Facebook!</a>
	<?php else: ?>
		<p>
			Bienvenido, <?php echo $facebook_user->getName(); ?>
		</p>
		<a href="app/logout.php" class="btn btn-danger">Cerrar sesión</a>
	<?php endif; ?>
</body>
</html>