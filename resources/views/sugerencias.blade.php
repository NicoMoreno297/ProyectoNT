<html>

<head>
	<title>SUGERENCIAS</title>
</head>

<body>
	
	<label>SUGERENCIAS DE PEL&IacuteCULAS</label><br>
	@foreach($listado as $fila)
		<?php $f=$fila->images->poster ?>
			<img src=$f border="1" width="200" height="100" />
			<p>{{$fila->title}}:<br>{{$fila->synopsis}}</p><br>
		@endforeach
	
</body>

<html>