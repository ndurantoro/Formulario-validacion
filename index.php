<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <form id="formulario01">
            <div class="form-group">
                <label>Nombre:</label>
                <input class="form-control" type="text" id="nombre" name="nombre" required>
                <div class="invalid-feedback">
                   Ingrese un nombre en el recuadro.
                </div>
            </div>
            <div class="form-group">
                <label>Apellido:</label>
                <input class="form-control" type="text" id="apellido" name="apellido" required>
                <div class="invalid-feedback">
                   Ingrese un apellido en el recuadro.
                </div>
            </div>
            <div class="form-group">
                <label>E-Mail:</label>
                <input class="form-control" type="email" id="email" name="email" required>
                <div class="invalid-feedback">
                   Ingrese un E-Mail.
                </div>
            </div>
            <div class="form-group">
                <label>Fecha nacimiento:</label>
                <input class="form-control" type="date" id="fecnac" name="fecnac" required>
                <div class="invalid-feedback">
                   Ingrese un fecha de nacimiento.
                </div>
            </div>
            
            <input id="btnenviar" type="button" value="Enviar">
        </form>
        
        <div id="mensaje"></div>
        
        <script>
            $("#btnenviar").click(function(event){
                var form = $("#formulario01");
                
                if (form[0].checkValidity()===false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                else{
                    cargadatos();
                }
                
                form.addClass("was-validated");
                
            }); 
            
            function cargadatos(){
                var nombre=$("#nombre").val();
                var email=$("#email").val();
                $("#mensaje").load("cargaDatos.php",{"nombre":nombre,"email":email})
            }
            
        </script>
        
    </body>
</html>
