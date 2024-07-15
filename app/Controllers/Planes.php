<?php
namespace App\Controllers;
use App\Models\PlanesModel;

class Planes extends BaseController
{
    public function index(): string
    {   
        $plan = new PlanesModel();
        $datos['datos']=$plan->findAll();
        
        return view ('planes',$datos);
    }
}
