<html>
<head>
<title>CUESTIONARIO</title>
</head>
<body>
<form action="/analisis" method="post">
{{ csrf_field() }}
    @foreach($listado as $elemento)
        <p>{{$elemento["pregunta"]}}</p><br/>
        <input type="submit" value="V">
        <input type="submit" value="F"><br/>
    @endforeach
<input type="submit" value="Aceptar"> 
</form> 
</body>
</html>