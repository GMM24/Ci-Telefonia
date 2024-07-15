<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Municipios</h1>
    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th>Id de Cliente</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Calle o Avenida</th>
                <th>Numero de Casa </th>
                <th>Zona</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $clientes):
                    
            ?>
            <tr>
                <td><?php echo $clientes['cliente_id'];?></td>
                <td><?php echo $clientes['apellido'];?></td>
                <td><?php echo $clientes['nombre'];?></td>
                <td><?php echo $clientes['correo_electronico'];?></td>
                <td><?php echo $clientes['calle_avenida'];?></td>
                <td><?php echo $clientes['no_casa'];?></td>
                <td><?php echo $clientes['zona'];?></td> 
            </tr>
            <?php 
                endforeach;
            ?>
        </tbody>
    </table>
   </div> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>