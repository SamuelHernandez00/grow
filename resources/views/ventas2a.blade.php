<select name="id_organizacion" id="id_empleado">
    <option value="0">-- Selecciona una Organizacion</option>
    @foreach( $organizaciones as $orga)
      <option value="{{$orga->id}}">{{$orga->nombre}}</option>
    @endforeach
</select>




<script type="text/javascript">
    $(document).ready(function(){

        $("#id_empleado").change(function(){
            var empleado = $("#id_empleado").val();
              
              if(empleado == 0){
                  $("#info01").empty();
                  $("#info02").empty();
                  $("#info02").html('<img src="{{ asset("img/usuario.jpg") }}" alt="" width="50"  >');
              }
            else{
                
            }
        });

    });
</script>