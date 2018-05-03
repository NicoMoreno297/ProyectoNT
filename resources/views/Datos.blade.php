<html>
	<head>
		<title>DATOS</title>
	</header>
	<body>
		<form action="/seleccion" method="POST">
		
			{{ csrf_field() }}
			<label>Datos Personales</label><br>
			<input type="text" name="id" value="1"/><br/>
			
			<label>Datos Películas</label><br>
			<input type="text" value=1 name="id1"/><br/>
			<input type="text" value="1" name="gen1"/><br/>
			<input type="text" value=5 name="cal1"/><br/>
			<input type="text" value="18" name="sen1"/><br/>
			
			<input type="text" value=2 name="id2"/><br/>
			<input type="text" value="2" name="gen2"/><br/>
			<input type="text" value=3 name="cal2"/><br/>
			<input type="text" value="16" name="sen2"/><br/>
			
			<input type="text" value=3 name="id3"/><br/>
			<input type="text" value="1" name="gen3"/><br/>
			<input type="text" value=5 name="cal3"/><br/>
			<input type="text" value="16" name="sen3"/><br/>
			
			<input type="text" value=4 name="id4"/><br/>
			<input type="text" value="1" name="gen4"/><br/>
			<input type="text" value=1 name="cal4"/><br/>
			<input type="text" value="16" name="sen4"/><br/>
			
			<input type="text" value=5 name="id5"/><br/>
			<input type="text" value="2" name="gen5"/><br/>
			<input type="text" value=5 name="cal5"/><br/>
			<input type="text" value="18" name="sen5"/><br/>
			
			<input type="text" value=6 name="id6"/><br/>
			<input type="text" value="1" name="gen6"/><br/>
			<input type="text" value=2 name="cal6"/><br/>
			<input type="text" value="16" name="sen6"/><br/>
			
			<input type="submit" value="Ingresar"/>
		</form>
	</body>							
</html>