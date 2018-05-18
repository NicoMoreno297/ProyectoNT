<html>
<head>
<title>INGRESO</title>
</head>
<body>
<form action="/perfilbases" method="post">
{{ csrf_field() }}
<h1 align=center>BIENVENIDO A MOVIESEARCH<h1>
<h3>Ingrese el usuario:</h3>
<input type="text" name="usuario">
<h3>Ingrese su contraseña:</h3>
<input type="text" name="contra">
<h3>Ingrese su nombre:</h3>
<input type="text" name="nombre">
<h3>Ingrese su edad:</h3>
<input type="text" name="edad">
<br><br>
<input type="submit" value="OK"> 
</form> 
</body>
</html>
