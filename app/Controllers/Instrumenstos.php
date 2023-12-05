<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios_model;

class Instrumenstos extends Controller
{
    public function index()
    {
		$instrumentos = new Instrumentos_model;
		$data['todos_instrumentos'] = $instrumentos->getInstrumentos();
        
        echo view('usuarioList_view', $data);

    }//index
	
    
}//controller
