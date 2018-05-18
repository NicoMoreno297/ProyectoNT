<html>

<head>
	<title>LISTA</title>
</head>

<body>
	
	@foreach($listado as $elemento)
		<p>{{$elemento["id"]}}-{{$elemento["gen"]}}-{{$elemento["cal"]}}-{{$elemento["sen"]}}</p>
	@endforeach
	
</body>

<html>