<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios_model;

class Alterar_Perfil extends Controller
{

    
    public function index($id)
    {
        $dadosUsuario = session('dadosUsuario');

        //pega os instrumentos
		$instrumentos = new Instrumentos_model;
		$data['todos_instrumentos'] = $instrumentos->getInstrumentos();
        
        
        //pega o total de testes do usuários 
		$userTestes = new Usuarios_Testes_model;
		$data['total_de_testes'] = $userTestes->getCalculaTeste($dadosUsuario['id']);

         //pega oscupons do usuários 
		$userTestes = new Cupons_model;
		$data['usuarios_testes'] = $userTestes->getCuponsTestes($dadosUsuario['id']);

        //pega as empresas associadas, se existir
        $usuarioMeta = new Usuario_Meta_Model();
        $array_id_associados = array();

        foreach($usuarioMeta->getIdEmpresasAssociados($dadosUsuario['id']) as $item_id)
        {
            $array_id_associados[] = (int) ($item_id['id_empresa']);
        }

        if(!empty($array_id_associados))
        {
            $data['empresas_associadas'] = $usuarioMeta->getEmpresasAssociados($array_id_associados);
        }
        else
        {
            $data['empresas_associadas'] = NULL;
        }

        echo view('dashboard_view', $data);

		if($id == $dadosUsuario['id'] )
        {
            //pega os testes do usuários 
            $userTestes = new Usuarios_Testes_model;
            $data['total_de_testes'] = $userTestes->getCalculaTeste($dadosUsuario['id']);

            //Grava o usuário logado
            $session->set('UserLogado', 'Profissional');	
        }
        else
        {
            //pega os testes do usuários 
            $userTestes = new Usuarios_Testes_model;
            $data['total_de_testes_empresa'] = $userTestes->getCalculaTeste($id);



            //Grava o usuário logado
            $session->set('UserLogado', 'Empresa');	
        }

        echo view('dashboard_view', $data);
        

    }//index
	
    
}//controller