<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<style>
    .form{
        width:100px;
    }
</style>

<h2>Editar Registro de Usuario</h2>
        <hr>
        <form action="{{ route('salvar_servicio',['id' => $serv->id]) }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PUT') }}  
          <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del Servicios</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="nombre" value="{{ $serv->nombre}}" required>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tipo Servicios</label>
    <select class="form-select" aria-label="Default select example" name="tipo_servicio" value="{{ $serv->tipo_servicio}}" required>
    <option selected>Selecciona un Servicio</option>
    <option value="Publicidad">Publicidad</option>
    <option value="Sitio Web">Sitio Web</option>
    <option value="Comercial">Comercial</option>
    </select>
    </div>
  
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descripcion:</label>
    <input type="textarea" class="form-control" id="" aria-describedby="emailHelp" name="descripcion" value="{{ $serv->descripcion}}" required>
    </div>
  
    <div class="mb-3">
    <label >Imagen</label>
    <input type="file"  id=""  name="Imagen" value="{{ $serv->Imagen}}" required>
    </div> 
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Costo</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="costo" value="{{ $serv->costo}}" required>
    </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
        </form>       <div class="mb-3">
   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>