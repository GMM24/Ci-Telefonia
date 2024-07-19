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
    <h1>Clientes</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo base_url ('/');?>">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
    
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ci Telefonia
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo base_url ('ver_clientes');?>">Clientes</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url ('ver_lineatelefonica');?>">Linea Telefónica</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url ('ver_planes');?>">Planes</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <table class="table table-border table-striped">
        <thead>
          <a href="nuevo_clientes" class="btn btn-primary">Nuevo Cliente</a>
            <tr>
                <th>Id de Cliente</th>
                <th>Apellido y Nombre</th>
                <th>Correo Electronico</th>
                <th>Calle o Avenida</th>
                <th>Numero de Casa y Zona </th>
         
                
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $clientes):
                    
            ?>

            <tr>
                <td><?php echo $clientes['cliente_id'];?></td>
                <td><?php echo $clientes['apellido'].", ".$clientes['nombre'];?></td>
                <td><?php echo $clientes['correo_electronico'];?></td>
                <td><?php echo $clientes['calle_avenida'];?></td>
                <td><?php echo $clientes['no_casa']." zona ". $clientes['zona'];?></td>
                <td>
                  <a href="actualizar_cliente" class="btn btn-info">Actualizar</a>
                  <a href="eliminar_cliente/<?php echo $clientes['cliente_id']?>" class="btn btn-danger" >Eliminar</a>
                </td>
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