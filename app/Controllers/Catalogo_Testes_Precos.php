<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Catalogo_Testes_Precos_model;

class Catalogo_Testes extends Controller
{
    public function index()
    {
        $catalogo_testes_precos = new Catalogo_Testes_Precos_model;
		$data['preco_testes'] = $catalogo_testes_precos->getCatalogo_Testes_Precos($id);
		
        $data['testes'] = 'Novo Teste';
        
        echo view('catalagoList_view', $data);

    }//index
	
    
}//controller
