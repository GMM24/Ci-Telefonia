<?php

namespace App\Controllers;
use App\Models\ClientesModel;
class ClientesController extends BaseController
{
    public function index(): string
    {   
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->findAll();
        //clientes es la vista que muestra los clientes
        return view ('clientes',$datos);
    }
    //esta funcion muestra el formulario
    public function nuevoCliente(): string
    {
        return view('clientes_nuevos');
    }
    public function agregarCliente()
    {   
        //la mayoria de veces se necesita una variable para cada elmento del formulario
        //definicion de variable 
        // $id = $this->request->getVar('txtId');
        // $nombre = $this->request->getVar('txtNombre');
        // $apellido = $this->request->getVar('txtApellido');
        // $correo = $this->request->getVar('txtCorreo');
        // $calleAvenida = $this->request->getVar('txtCalleAvenida');
        // $noCasa = $this->request->getVar('txtNoCasa');
        // $zona = $this->request->getVar('txtZona');


            $datos=[
                'cliente_id'=> $this->request->getVar('txtId'),
                'nombre'=> $this->request->getVar('txtNombre'),
                'apellido'=> $this->request->getVar('txtApellido'),
                'correo_electronico'=> $this->request->getVar('txtCorreo'),
                'calle_avenida'=> $this->request->getVar('txtCalleAvenida'),
                'no_casa'=> $this->request->getVar('txtNoCasa'),
                'zona'=> $this->request->getVar('txtZona')
            ];

        //creando unn objeto de tipo clientes model
        $clientes = new ClientesModel();
        $clientes->insert($datos); //insert to clientes value(...);
        echo "Datos Guardados";
        return redirect()->route('clientes');
    }
    public function eliminarCliente($id=null)
    {
        //echo $id;
        $clientes = new ClientesModel();
        $clientes->delete(['cliente_id'=>$id]);
        return redirect()->route('clientes');
    }
} 
