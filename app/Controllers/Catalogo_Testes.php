<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios_Model;
use App\Models\Catalogo_Testes_model;

class Catalogo_Testes extends Controller
{
    public function index()
    {
        $catalogo_testes = new Catalogo_Testes_model;
		$data['todos_catalogo_testes'] = $catalogo_testes->getCatalogo_TestesId();
		
        $data['testes'] = 'Novo Teste';

        //
        $user = new Usuarios_Model;
		$data['todos_user'] = $user->getUsuario();
        
        echo view('catalagoList_view', $data);

    }//index
	
    
}//controller
