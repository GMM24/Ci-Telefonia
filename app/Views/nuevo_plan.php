<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Clientes</h1>

        <form action="agregar_cliente" method="post">
            <div class="mb-3">
                <label for="txtId" class="form-label">Id</label>
                 <input type="text" class="form-control" id="txtId" name="txtId" placeholder="Ingrese Id">
            </div>
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese Nombre">
            </div>
            <div class="mb-3">
                <label for="txtApellido" class="form-label">Apellido</label>
                 <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese Apellido">
            </div>
            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Correo Electronico</label>
                 <input type="text" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingrese Correo Electronico">
            </div>
            <div class="mb-3">
                <label for="txtCalleAvenida" class="form-label">Calle o Avenida</label>
                 <input type="text" class="form-control" id="txtCalleAvenida" name="txtCalleAvenida" placeholder="Ingrese su Calle o Avenida">
            </div>
            <div class="mb-3">
                <label for="txtNoCasa" class="form-label">Número de Casa</label>
                 <input type="number" class="form-control" id="txtNoCasa" name="txtNoCasa" placeholder="Ingrese Número de Casa">
            </div>
            <div class="mb-3">
                <label for="txtZona" class="form-label">Zona</label>
                 <input type="number" class="form-control" id="txtZona" name="txtZona" placeholder="Ingrese su Zona">
            </div>
            <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Enviar</button>
        </form>


      
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>