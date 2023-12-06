<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios_model;

class Login extends Controller
{
    public function index()
    {
		//encerra a sessão
		$session = session(); 
		$session->set('usuarioLogado', FALSE);
		
		echo view('login_view');
		
    }//index

    public function Logout()
	{
		//encerra a sessão
		$session = session(); 
		$session->set('usuarioLogado', FALSE);
		
		echo view('login_view');
		
	}//Logout

    public function Login()
	{	
		
		$data['msg'] = '';
		$data['msg_resgate'] = '';
		$data['usuarios_testes'] = '';
		$usuario = $this->request->getPost('nome');
		$senha   = $this->request->getPost('senha');

		$login = new Usuarios_model();
		$dadosUser = $login->loginUsuario($usuario, $senha);
		//$status1 = $dadosUser["status"]; 

		//if($dadosUser and $status == 'A')
		if($dadosUser AND $dadosUser[0]['status'] == 'A' )
		{
			//grava o user como logado
			$session = session(); 
			$session->set('usuarioLogado', TRUE);
			
			//grava os dados do usuário na sessão
			$usuario = array();
			$usuario['id']    		  = $dadosUser[0]['id'];
			$usuario['nome']          = $dadosUser[0]['nome'];
			$usuario['tipo_usuario']  = $dadosUser[0]['tipo_usuario'];
			$usuario['email'] 		  = $dadosUser[0]['email'];
			$usuario['login'] 		  = $dadosUser[0]['login'];
			$session->set('dadosUsuario', $usuario);

			
			$data['msg_resgate '] = '';
			echo view('dashboard_view', $data);
			//echo view('dashboard_view');
		}
		else
		{
			$data['msg'] = 'Usuário ou Senha Inválida';
			$data['nome'] = $this->request->getPost('nome');
			echo view('login_view', $data);
		}
			
	}
	
    
}//controller
