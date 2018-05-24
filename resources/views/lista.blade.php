<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listado</title>
    </head>
    <body>
    <ul>
        @foreach($lista as $fila)
        <li><p>{{$fila->title}}</p></li>
        @endforeach
    </ul>
    </body>
</html>