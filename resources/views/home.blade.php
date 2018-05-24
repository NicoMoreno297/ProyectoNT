<html>
<header>
	<title>INICIO</title>
</header>
<body>
		<form action="/consultarPeliculas" method="GET">
			<input type="submit" name='PeliculasVistas' value="PeliculasVistas"/>
		</form>
		<form action="/sugerir" method="GET">
			<input type="submit" name='Sugerir'value="Sugerir" />
		</form>
		<form action="/verperfil" method="GET">
			<input type="submit" name='VerPerfil'value="VerPerfil" />
		</form>
		Mi Sesión:{{Session::get('id','no existe')}}
	</body>

</html>