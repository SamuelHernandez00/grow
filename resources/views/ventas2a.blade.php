

<hr>

<h2>Formulario de Ventas del Producto  / {{ $producto->nombre }}  </h2>
<img src="{{ asset('img/'.$producto->img) }}" alt="" width="100"><br>
Costo (C/U): <input type="text" id="precio" value=" {{ $producto->precio }} " ><br>


Cantidad:
<input type="text" name="cantidad" id="cantidad" >
<br>

Total:
<input type="text" name="total" id="total">
<br><br>
<input type="submit" value="Venta">

    <script type="text/javascript">
    $(document).ready(function(){
        $('#cantidad').keyup(function(){
            $(this).val();

           

           var cantidad = $('#cantidad').val();
            var costo = $('#precio').val();

            var total = cantidad * costo ;
       
            $('#total').val(total);
           
        });
        

    });

    </script>