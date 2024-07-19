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
                <label for="txtNoTel" class="form-label">Número de Teléfono</label>
                 <input type="text" class="form-control" id="txtNoTel" name="txtNoTel" placeholder="Ingrese ">
            </div>
            <div class="mb-3">
                <label for="txtFecha" class="form-label">Fecha deP Pago</label>
                 <input type="text" class="form-control" id="txtFecha" name="txtFecha" placeholder="Ingrese Nombre">
            </div>
            <div class="mb-3">
                <label for="txtMeses" class="form-label">Meses Atrasados</label>
                 <input type="text" class="form-control" id="txtMeses" name="txtMeses" placeholder="Ingrese Apellido">
            </div>
            <div class="mb-3">
                <label for="txtPlanesId" class="form-label">Planes Id</label>
                 <input type="text" class="form-control" id="txtPlanesId" name="txtPlanesId" placeholder="Ingrese Correo Electronico">
            </div>
            <div class="mb-3">
                <label for="txtIdCliente" class="form-label">Id de Cliente</label>
                 <input type="text" class="form-control" id="txtIdCliente" name="txtIdCliente" placeholder="Ingrese su Calle o Avenida">
            </div>
            <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Enviar</button>
        </form>


      
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>