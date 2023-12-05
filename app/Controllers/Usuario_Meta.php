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
		//$id_empresa = session('id_empresa');//4

        //pega dados da sessão
        $dadosUsuario = session('dadosUsuario');

        if(in_array($dadosUsuario['tipo_usuario'], $array_id_user))
		{
            //pega todos os Usuarios Associados
            $obj_usuarioMeta    = new Usuario_Meta_Model;
            $data['usuario_associado'] = $obj_usuarioMeta->getAssociados($dadosUsuario['id']);

            //Pega os Usuários não associados
            //Busca o id dos associados;
            //Depois pega todos os usuários, menos os associados.
            $array_id_associados = array();//$array_meta
            foreach($obj_usuarioMeta->getAssociadosId($dadosUsuario['id']) as $item_id)
            {
                $array_id_associados[] = (int) ($item_id['id_usuario']);
            }
            
            //Testa se existe 'array_id_associados'.
            //se existir, pega todos usuários que não associados.
            //se não existir associados('array_id_associados'), exibe todos os usuários. 
            if(!empty($array_id_associados))
            {
                $data['usuario_nao_associado'] = $obj_usuarioMeta->getNaoAssociados($array_id_associados);
            }
            else
            {
                $obj_usuario    = new Usuarios_model;
                $data['usuario_nao_associado'] = $obj_usuario->getUsuarioProfissional();
            }

            echo view('usuarioAssociado_view', $data);
        }
		else
		{
        	echo view('dashboard_view');
        	//echo view('dashboard_view', $data);
		}

    }//index

    public function AssociarUsuario($id_usuario)
    {  
         //controle de usuário
		$array_id_user = ['1' =>'1', '2' =>'2', '4' =>'4'];

        //pega dados da sessão
        $dadosUsuario = session('dadosUsuario');

        if(in_array($dadosUsuario['tipo_usuario'], $array_id_user))
		{
            //Add um novo Associado
            $obj_usuarioMeta = new Usuario_Meta_Model;
            $dados_meta['id_usuario'] = $id_usuario;
            $dados_meta['meta_key']   = 'Id_Empresa';
            $dados_meta['meta_value'] = $dadosUsuario['id'];

            $obj_usuarioMeta->insert($dados_meta); 

            //Atualiza a View
            //Atualiza a view
            //pega todos os Usuarios Associados
            $obj_usuarioMeta    = new Usuario_Meta_Model;
            $data['usuario_associado'] = $obj_usuarioMeta->getAssociados($dadosUsuario['id']);

            //Pega os Usuários não associados
            //Busca o id dos associados;
            //Depois pega todos os usuários, menos os associados.
            $array_id_associados = array();//$array_meta
            foreach($obj_usuarioMeta->getAssociadosId($dadosUsuario['id']) as $item_id)
            {
                $array_id_associados[] = (int) ($item_id['id_usuario']);
            }
            
            //Testa se existe 'array_id_associados'.
            //se existir, pega todos usuários que não associados.
            //se não existir associados('array_id_associados'), exibe todos os usuários. 
            if(!empty($array_id_associados))
            {
                $data['usuario_nao_associado'] = $obj_usuarioMeta->getNaoAssociados($array_id_associados);
            }
            else
            {
                $obj_usuario    = new Usuarios_model;
                $data['usuario_nao_associado'] = $obj_usuario->getUsuarioProfissional();
            }

            echo view('usuarioAssociado_view', $data);

        }
        else
        {
            echo view('dashboard_view');
        	//echo view('dashboard_view', $data);
        }    

    }//AssociarUsuario

    public function DesassociarUsuario($id_meta)
    {   
        //controle de usuário
		$array_id_user = ['1' =>'1', '2' =>'2', '4' =>'4'];

        //pega dados da sessão
        $dadosUsuario = session('dadosUsuario');

        if(in_array($dadosUsuario['tipo_usuario'], $array_id_user))
		{
            //Deleta o associado
            $obj_usuarioMeta    = new Usuario_Meta_Model;
            $obj_usuarioMeta->delete($id_meta);

            //Atualiza a view
            //pega todos os Usuarios Associados
            $obj_usuarioMeta    = new Usuario_Meta_Model;
            $data['usuario_associado'] = $obj_usuarioMeta->getAssociados($dadosUsuario['id']);

            //Pega os Usuários não associados
            //Busca o id dos associados;
            //Depois pega todos os usuários, menos os associados.
            $array_id_associados = array();
            foreach($obj_usuarioMeta->getAssociadosId($dadosUsuario['id']) as $item_id)
            {
                $array_id_associados[] = (int) ($item_id['id_usuario']);
            }
            
            //Testa se existe 'array_id_associados'.
            //se existir, pega todos usuários que não associados.
            //se não existir associados('array_id_associados'), exibe todos os usuários. 
            if(!empty($array_id_associados))
            {
                $data['usuario_nao_associado'] = $obj_usuarioMeta->getNaoAssociados($array_id_associados);
            }
            else
            {
                $obj_usuario    = new Usuarios_model;
                $data['usuario_nao_associado'] = $obj_usuario->getUsuarioProfissional();
            }

            echo view('usuarioAssociado_view', $data);
               
        }
        else
        {
            echo view('dashboard_view');
        	//echo view('dashboard_view', $data);
        }    

    }//DesassociarUsuario
	
    
}//controller