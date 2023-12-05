<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios_model;
use App\Models\Usuario_Meta_Model;

class Usuario_Meta extends Controller
{
    public function index()
    {
        //controle de usuário
		$array_id_user = ['1' =>'1', '2' =>'2', '4' =>'4'];
		$id_empresa = session('id_empresa');//4

        //pega dados da sessão
        $dadosUsuario = session('dadosUsuario');

        if(in_array($dadosUsuario['tipo_usuario'], $array_id_user))
		{
            //pega todos os Usuarios Associados
            $obj_usuarioMeta    = new Usuario_Meta_Model;
            $usuarioMeta        = $obj_usuarioMeta->getAssociados($dadosUsuario['id']);
            $data['usuario_associado'] = $usuarioMeta;

            //pega todos os Usuarios não Associados da Empresa logada.
            $array_meta = array();
            $usuarioMeta2 = $obj_usuarioMeta->getNaoAssociados($dadosUsuario['id']);
            //$array_meta['id_usuario'] = $usuarioMeta2[0]['id_usuario'];
            $data['usuario_nao_associado'] = $usuarioMeta2;

            //pega o id dos associados,
            $array_id_associados = array();//$array_meta
            foreach($obj_usuarioMeta->getAssociadosId($dadosUsuario['id']) as $item_id)
            {
                $array_id_associados[] = (int) ($item_id['id_usuario']);
            }
            
            //Busca todos os usuários, menos os associados   
            $data['teste_id'] = $obj_usuarioMeta->getNaoAssociados2($array_id_associados);
            

            
           // $data['teste_id'] = $array_meta;
            //$data['teste_id'] = $usuarioMeta3[0]['id_usuario'];
           

            

            echo view('usuarioAssociado_view', $data);
        }
		else
		{
        	echo view('dashboard_view');
        	//echo view('dashboard_view', $data);
		}    


    }//index

    public function AssociarUsuario($id_usuario, $id_empresa)
    {
        echo view('usuarioAssociado_view');

    }//AssociarUsuario
	
    
}//controller