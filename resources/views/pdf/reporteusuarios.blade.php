<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .titulo{
            text-align:center;
            font:2rem;
            color:blue
        }
        
        table{
            border:1px solid black;
        }
        td{
            
        }
    </style>
</head>
<body>
    <div class="titulo"><h1>Listado de Usuarios</h1></div>
    <table >
        <thead>
        <th>
            <td>Id</td>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Role</td>
            <td>Fecha</td>
            <td>Terminos</td>
        </th>
        </thead>
       
        
            @foreach($usuarios as $usu)
            <tbody>
            <th>
                <td>{{$usu->id}}</td>
                <td>{{$usu->nombre}}</td>
                <td>{{$usu->email}}</td>
                <td>{{$usu->tipo}}</td>
                <td>{{$usu->fn}}</td>
                <td>{{$usu->terminos}}</td>
            </th>
            </tbody>
            @endforeach
        
    </table>
</body>
</html>