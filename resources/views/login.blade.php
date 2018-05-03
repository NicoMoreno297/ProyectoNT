<html>
	<header>
		<title>LOGIN</title>
	</header>
	<body>
		<h1>LOGIN</h1>
		<form action="/validar" method="POST">
			{{ csrf_field() }}
			<label>USUARIO</label>
			<input type="text" name="usuario"/><br>
			<label>PASSWORD</label>
			<input type="text" name="password"/><br>
			<input type="submit" value="Ingresar"/>
		</form>	
	</body>
</html>