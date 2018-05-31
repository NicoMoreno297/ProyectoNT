<html>

<head>
	<title>SUGERENCIAS</title>
</head>

<body>
	
	<label>SUGERENCIAS DE PEL&IacuteCULAS</label><br>
	@foreach($listado as $fila)
		@foreach($imagenes as $img)
			<img src=$img border="1" width="200" height="100" />
			<p>{{$fila->title}}:<br>{{$fila->synopsis}}</p><br>
		@endforeach
	@endforeach
	
</body>

<html>