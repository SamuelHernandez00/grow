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
        <form action="{{ route('salvar',['id' => $usu->id]) }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PUT') }}  

          <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre"  value="{{ $usu->nombre }}" required>
     </div>

     <label for="exampleInputEmail1" class="form-label">Tipo de Usuario</label>
     <select class="form-select" aria-label="Default select example" name="tipo" value="{{ $usu->tipo }}" required>
    <option selected>Selecciona un Tipo de Usuario</option>
    <option value="Admin">Admin</option>
    <option value="Usuario">Usuario</option>
    </select>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email" value="{{ $usu->email }}" required>
     </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password"  onkeyup="evaluar(this);" required>
  </div>
  <b id="nivel"></b>
    <b id="error"></b>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha Nacimiento</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fn" value="{{ $usu->fn }}" required>
     </div>
     <div class="mb-3">
    <label >Foto</label>
    <input type="file"  name="foto"  value="{{ $usu->foto }}" required>
     </div>
     
 <br>
     <button type="submit" class="btn btn-primary">Submit</button>
       
          
        </form>
        <script type="text/javascript">
                function evaluar(obj){
                    var pass = obj.value;               //Recibe variable de input
                    var conteo = obj.value.length;      //Cuenta la cadena string|Conraseña
                    var cadena = pass.split("");        //Divide la cadena String|Contraseña
                    var cont = 0;                       //Cuenta los caracteres especiales
                    var let_a = 0;                      //Cuenta las letras minusculas
                    var let_b = 0;                      //Cuenta las letras mayusculas
                    var let_c = 0;                      //Cuenta n     los numeros
                    var let_d = 0;                        //Caracter
                    if(conteo > 3){
                            if(cadena[0].search(/[A-Z]/g)+1 > 0){
                                let_a = 0;
                                let_b = 0;
                                let_c = 0;
                                let_d = 0;
                                cont = 0;

                                 //-------------------Evaluar: caracter x caracter
                                 for(var i=0; i < cadena.length; i++){
                                     var letra = cadena[i];
                                     if(letra.search(/[a-z]/g)+1 > 0){ let_a = let_a+1; }
                                     else{
                                            if(letra.search(/[A-Z]/g)+1 > 0){ let_b = let_b+1;}
                                            else{
                                                    if(letra.search(/[0-9]/g)+1 > 0){let_c = let_c+1;}
                                                    else{
                                                        if(letra.search(/[%&#$]/g)+1 > 0){let_d = let_d+1; }
                                                        else{ cont = cont+1; }
                                                    }
                                            }
                                     }
                                 }
                                 //------------------Evaluar: Canitdad de caracteres

                                 if(conteo >=8){
                                    document.getElementById("nivel").style.cssText = 'color: #000; background-color: #0D8E1A;';
                                    document.getElementById("nivel").innerHTML = "Segura";
                                 }else{
                                        if(conteo >=6 ){
                                            document.getElementById("nivel").style.cssText = 'color: #000; background-color: #EFDD0F;';
                                            document.getElementById("nivel").innerHTML = "Pocosegura";
                                        }
                                        else{
                                            document.getElementById("nivel").style.cssText = 'color: #000; background-color: #F00; ';
                                            document.getElementById("nivel").innerHTML = "Insegura";
                                        }
                                 }
                                 
                                 //-------------------Indicar Errores: Si existen letras y numeros
                                 if(let_a < 1 || let_b < 1 || let_c < 1 || let_d < 1){
                                     if(let_a < 1){let_a = "una letra minuscula"; }else{ let_a = " ";}
                                     if(let_b < 1){let_b = "una letra mayuscula"; }else{ let_b = " ";}
                                     if(let_c < 1){let_c = "un numero"; }else{ let_c = " ";}
                                     if(let_d < 1){let_d = "un caracter = (%&#$)"; }else{ let_d = " ";}
                                     document.getElementById("error").innerHTML = "Error: la contraseña debe de contener al menos " + let_a + " " + let_b + " " + let_c  + " " + let_d; 
                                 }else{
                                     document.getElementById("error").innerHTML = " ";
                                 }
                                 // ---------------------- Indica Errores: Si existen caracteres especiales
                                 if(cont > 0){
                                    
                                    document.getElementById("password").style.cssText = 'color: #F00; border: solid 1 px #F00';
                                    document.getElementById("nivel").innerHTML = " ";
                                 }
                                 else{
                                     document.getElementById("password").style.cssText = 'color: #000; border: solid 1px #000';
                                 }
                            }
                            else{ 
                                document.getElementById("password").style.cssText = 'color: #F00; border: solid 1px #F00';
                                document.getElementById("nivel").style.cssText = 'border-style: none;';
                                document.getElementById("nivel").innerHTML = " ";
                                document.getElementById("error").innerHTML = "Error: El primer caracter debe ser una letra mayuscula";
                            }
                    }
                    else{
                        document.getElementById("password").style.cssText = 'color: #000; border: solid 1px #000';
                        document.getElementById("nivel1").innerHTML = " ";
                        document.getElementById("error").innerHTML = " ";
                    }
                }

               
                
            </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>