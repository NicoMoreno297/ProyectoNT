<html>
<head>
<title>CUESTIONARIO</title>
</head>
<body>
<form action="/analisis" method="post">
{{ csrf_field() }}
<h3>Prefieres la comedia o terror:</h3>
<select name="1"> 
<option value="comedia">Comedia</option> 
<option value="terror">Terror</option> <br>
</select> 
<h3>Cual es tu actividad favorita:</h3>
<input type="text" name="2">
<h3>Te gusta el misterio o la accion:</h3>
<select name="3"> 
<option value="misterio">Misterio</option> 
<option value="accion">Accion</option> <br>
</select>
<h3>Te consideras una persona romatica:</h3>
<select name="4"> 
<option value="si">Si</option> 
<option value="no">No</option> <br>
</select>
<h3>Lloras con facilidad:</h3>
<select name="5"> 
<option value="si">Si</option> 
<option value="no">No</option> <br>
</select>
<h3>Te gusta cantar o bailar:</h3>
<select name="6"> 
<option value="si">Si</option> 
<option value="no">No</option> <br>
</select>
<h3>Cual es tu color favorito:</h3>
<input type="text" name="7">
<h3>Ves peliculas comunmente en familia:</h3>
<select name="8"> 
<option value="si">Si</option> 
<option value="no">No</option> <br>
</select>
<h3>Te gustan los dibujos animados:</h3>
<select name="9"> 
<option value="si">Si</option> 
<option value="no">No</option> <br>
</select>
<h3>Te relaja la accion o el romance:</h3>
<select name="10"> 
<option value="accion">Accion</option> 
<option value="romance">Romance</option> <br>
</select>
<br><br>
<input type="submit" value="Aceptar"> 
</form> 
</body>
</html>