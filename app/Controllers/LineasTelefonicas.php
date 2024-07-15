<?php
namespace App\Controllers;
use App\Models\LineasTelefonoModel;

class LineasTelefonicas extends BaseController
{
    public function index(): string
    {   
        $lineatelefono = new LineasTelefonoModel();
        $datos['datos']=$lineatelefono->findAll();
        
        return view ('lineastelefonicas',$datos);
    }
}
