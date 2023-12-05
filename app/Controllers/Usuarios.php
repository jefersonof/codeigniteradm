<?php namespace App\Controllers;

use CodeIgniter\I18n\Time;
use CodeIgniter\Controller;
use App\Models\Usuarios_model;
use App\Models\Instrumentos_model;
use App\Models\Usuario_Meta_Model;

class Usuarios extends Controller
{
    public function index()
    {	
		//controle de usuário
		$array_id_user = ['1' =>'1', '2' =>'2'];
		$dadosUser = session('dadosUsuario');

		$instrumentos = new Instrumentos_model;
		$data['todos_instrumentos'] = $instrumentos->getInstrumentos();

		if(in_array($dadosUser['tipo_usuario'], $array_id_user))
		{
			$data['msg_resgate'] = "";
			$data['msg']         = "";

			$usuario = new Usuarios_model();
        	$data['listar_usuarios'] = $usuario->getUsuario();
			echo view('usuarioList_view', $data);
		}
		else
		{
        	echo view('dashboard_view');
        	//echo view('dashboard_view', $data);
		}	
		
    }//index

	public function save2()
    {
		$data['dadosPost'] = '';
		if($this->request->getMethod() === 'post')
		{
			$data['msg'] = '';
			$data['dadosPost'] =  $this->request->getPost();
			echo view('usuarioForm_view', $data);
		}
	}	
	
	public function save()
    {
		$data['dadosPost'] = "";
		$data['msg'] = "";
		$data['msg_resgate'] = "";
		
		
		//controle de usuário
		$array_id_user = ['1' =>'1', '2' =>'2'];
		$dadosUser = session('dadosUsuario');
		if(in_array($dadosUser['tipo_usuario'], $array_id_user))
		{
			if($this->request->getMethod() === 'post')
			{
				//salva o Usuário
				$modelUser = new Usuarios_model;
				$dadosUser = $this->request->getPost();

				$modelUser->insert($dadosUser);
				$id_usuario =  $modelUser->getInsertID();

				//Verifica o nível do usuário e monta a 'Meta Key'
				$nivelUser = $this->request->getPost('tipo_usuario');;
				if($nivelUser == 1)//Admin Supervisor
				{
					$modelUserMeta = new Usuario_Meta_Model;

					//Grava a Meta Key por bloco
					//Nome
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Nome';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('nome');
					$modelUserMeta->insert($DadosUserMeta);

					//E-mail
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'E-mail';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('email');
					$modelUserMeta->insert($DadosUserMeta);

					//cargo
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Cargo';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('cargoSuper');
					$modelUserMeta->insert($DadosUserMeta);

					$data['msg'] = 'Usuário Salvo';
				}
				elseif($nivelUser == 2)//Admin Suporte
				{
					$modelUserMeta = new Usuario_Meta_Model;

					//Grava a Meta Key por bloco
					//Nome
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Nome';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('nome');;
					$modelUserMeta->insert($DadosUserMeta);

					//E-mail
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'E-mail';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('email');
					$modelUserMeta->insert($DadosUserMeta);

					//cargo
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Cargo';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('cargoSuper');
					$modelUserMeta->insert($DadosUserMeta);

					$data['msg'] = 'Usuário Salvo';	
				}
				elseif($nivelUser == 3)//=>Distribuidore
				{
					$modelUserMeta = new Usuario_Meta_Model;

					//Grava a Meta Key por bloco
					//Nome
					$DadosUserMeta['id_usuario']  = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Nome';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('nomeDist');;
					$modelUserMeta->insert($DadosUserMeta);

					//CNPJ
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'CNPJ';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('cnpjDist');
					$modelUserMeta->insert($DadosUserMeta);

					//Telefone
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Telefone';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('telDist');
					$modelUserMeta->insert($DadosUserMeta);

					//Responsavel1 
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Responsavel';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('resp1Dist');
					$modelUserMeta->insert($DadosUserMeta);

					//Cargo1
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Cargo_1';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('cargo1Dist');
					$modelUserMeta->insert($DadosUserMeta);

					//E-mail1
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'E-mail_Cargo_1';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('emailcargo1Dist');
					$modelUserMeta->insert($DadosUserMeta);
					
					//Responsavel2
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Responsavel_2';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('resp2Dist');
					$modelUserMeta->insert($DadosUserMeta);

					//Cargo2
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Cargo_2';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('cargo2Dist');
					$modelUserMeta->insert($DadosUserMeta);

					//E-mail2
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'E-mail_Cargo_2';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('emailcargo2Dist');
					$modelUserMeta->insert($DadosUserMeta);

					//Observação
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Observacao';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('observacaoDist');
					$modelUserMeta->insert($DadosUserMeta);
					

					$data['msg'] = 'Usuário Salvo';	
				}
				elseif($nivelUser == 4)//Empresa
				{
					$modelUserMeta = new Usuario_Meta_Model;

					//Grava a Meta Key por bloco
					//Nome
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Nome';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('nomeEmpre');;
					$modelUserMeta->insert($DadosUserMeta);

					//CNPJ
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'CNPJ';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('cnpjEmpre');
					$modelUserMeta->insert($DadosUserMeta);

					//Telefone
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Telefone';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('telEmpre');
					$modelUserMeta->insert($DadosUserMeta);

					//Endereco 
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Endereco';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('endEmpre');
					$modelUserMeta->insert($DadosUserMeta);

					//Área de atuação
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Area_Atuacao';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('areaEmpre');
					$modelUserMeta->insert($DadosUserMeta);

					//Responsável
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Responsavel';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('responEmpre');
					$modelUserMeta->insert($DadosUserMeta);
					
					//Cargo
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Cargo';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('cargoEmpre');
					$modelUserMeta->insert($DadosUserMeta);

					//E-mail
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'E-mail';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('emailEmpre');
					$modelUserMeta->insert($DadosUserMeta);

					//Observação
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Observacao';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('observacaoEmpre');
					$modelUserMeta->insert($DadosUserMeta);
					

					$data['msg'] = 'Usuário Salvo';	
					
				}
				elseif($nivelUser == 5)//Profissionais
				{
					$modelUserMeta = new Usuario_Meta_Model;

					//Grava a Meta Key por bloco
					//Nome
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Nome';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('nomeProf');;
					$modelUserMeta->insert($DadosUserMeta);

					//CPF
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'CPF';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('cpfProf');
					$modelUserMeta->insert($DadosUserMeta);

					//CRP
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'CRP';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('crpProf');
					$modelUserMeta->insert($DadosUserMeta);

					//Telefone 
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Telefone';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('telProf');
					$modelUserMeta->insert($DadosUserMeta);

					//Endereço
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Endereco';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('endProf');
					$modelUserMeta->insert($DadosUserMeta);

					//E-mail
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'E-mail';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('emailProf');
					$modelUserMeta->insert($DadosUserMeta);
					
					//Observação
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Observacao';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('observacaoProf');
					$modelUserMeta->insert($DadosUserMeta);

					$data['msg'] = 'Usuário Salvo';	
				}				
				elseif($nivelUser == 6)//Examinando
				{
					$modelUserMeta = new Usuario_Meta_Model;

					//Grava a Meta Key por bloco
					//Nome
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Nome';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('nomeExam');;
					$modelUserMeta->insert($DadosUserMeta);

					//CPF
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'CPF';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('cpfExam');
					$modelUserMeta->insert($DadosUserMeta);

					//Data de Nascimento
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Data_Nascimento';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('nataNasceExam');
					$modelUserMeta->insert($DadosUserMeta);

					//Sexo 
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Sexo';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('sexoExam');
					$modelUserMeta->insert($DadosUserMeta);

					//Escolaridade
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Escolaridade';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('escolarExam');
					$modelUserMeta->insert($DadosUserMeta);

					//Informações Adicionais
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Informacao_Adc';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('infoadcExam');
					$modelUserMeta->insert($DadosUserMeta);
					
					//Observação
					$modelUserMeta = new Usuario_Meta_Model;
					$DadosUserMeta['id_usuario'] = $id_usuario;
					$DadosUserMeta['meta_key']   = 'Observacao';
					$DadosUserMeta['meta_value'] =  $this->request->getPost('observacaoExam');
					$modelUserMeta->insert($DadosUserMeta);

					$data['msg'] = 'Usuário Salvo';	
				}	
				else
				{
					$data['msg'] = 'Nível de usuário inválido! ';
				}

				$data['msg'] = 'Usuário Salvo';
			}//if
			
			echo view('usuarioForm_view', $data);
		}
		else
		{
			echo view('dashboard_view');
		}	
		
    }//save

	public function setMeta()
	{
		$session = session();
		$usuarioMeta = array('cargoSuper' => '', 'cargoSupor' => '', 'nomeDist' => '', 'cnpjDist' => '', 'telDist' => '', 'resp1Dist' => '', 'cargo1Dist' => '', 'emailcargo1Dist' => '', 'resp2Dist' => '', 'cargo2Dist' => '', 'emailcargo2Dist' => '', 'observacaoDist' => '', 'nomeEmpre' => '', 'cnpjEmpre' => '', 'telEmpre' => '', 'endEmpre' => '', 'areaEmpre' => '', 'emailEmpre' => '', 'responEmpre' => '', 'cargoEmpre' => '', 'observacaoEmpre' => '', 'nomeProf' => '', 'cpfProf' => '', 'crpProf' => '', 'telProf' => '', 'endProf' => '', 'emailProf' => '', 'observacaoProf' => '', 'nomeExam' => '', 'cpfExam' => '', 'dataNasceExam' => '', 'sexoExam' => '', 'escolarExam' => '', 'infoadcExam' => '', 'observacaoExam' => '');			
		$session->set('usuarioMeta', $usuarioMeta);
	}//clearMeta

	public function editarUsuario($id)
	{
		try
		{
			$data['msg'] = '';

			//pega o nível do usuário na sessão
			$dadosUsuario = session('dadosUsuario');
			$data['teste'] = $dadosUsuario; 

			//Controle de Usuário - Niveis permitidos no 'IF'
			$array_tipo_user = ['1' =>'1', '2' =>'2'];
			if(in_array($dadosUsuario['tipo_usuario'], $array_tipo_user))
			{
				//Busca o usuário pelo ID 
				$obj_usuario = new Usuarios_model();
				$usuario = $obj_usuario->find($id);

				//Dados Usuário Padrão
				$data['id']           = $usuario['id'];
				$data['nome']         = $usuario['nome'];
				$data['tipo_usuario'] = $usuario['tipo_usuario'];
				$data['email'] 		  = $usuario['email'];
				$data['login'] 		  = $usuario['login'];
				$data['senha'] 		  = $usuario['senha'];
				$data['senha_antiga'] = $usuario['senha_antiga'];
				$data['status'] 	  = $usuario['status'];

				//$sessionMeta = session('usuarioMeta'); 
				$obj_usuarioMeta    = new Usuario_Meta_Model();
				$usuarioMeta        = $obj_usuarioMeta->getUserMeta($id);

				//Faz um clear Meta
				$this->setMeta();
				$session = session();

				//Admin Supervisor
				if($usuario['tipo_usuario'] == 1)
				{
					
					foreach($usuarioMeta as $item_meta)
					{
						if($item_meta['meta_key'] === 'Cargo')
						{
							
							$session->push('usuarioMeta', ['cargoSuper' => $item_meta['meta_value'] ]);
						}
					}
				}
				
				//Admin Suporte
				if($usuario['tipo_usuario'] == 2)
				{
					foreach($usuarioMeta as $item_meta)
					{
						if($item_meta['meta_key'] === 'Cargo')
						{
							$session->push('usuarioMeta', ['cargoSupor' => $item_meta['meta_value'] ]);
						}
					}
					
				}

				//Distribuidor
				if($usuario['tipo_usuario'] == 3)
				{
					foreach($usuarioMeta as $item_meta)
					{
						if($item_meta['meta_key'] === 'Nome')
						{
							$session->push('usuarioMeta', ['nomeDist' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'CNPJ')
						{
							$session->push('usuarioMeta', ['cnpjDist' => $item_meta['meta_value'] ]);
							
						}					
						if($item_meta['meta_key'] === 'Telefone')
						{
							$session->push('usuarioMeta', ['telDist' => $item_meta['meta_value'] ]);
							
						}
						if($item_meta['meta_key'] === 'Responsavel')
						{
							$session->push('usuarioMeta', ['resp1Dist' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Cargo_1')
						{
							$session->push('usuarioMeta', ['cargo1Dist' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'E-mail_Cargo_1')
						{
							$session->push('usuarioMeta', ['emailcargo1Dist' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Responsavel_2')
						{
							$session->push('usuarioMeta', ['resp2Dist' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Cargo_2')
						{
							$session->push('usuarioMeta', ['cargo2Dist' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'E-mail_Cargo_2')
						{
							$session->push('usuarioMeta', ['emailcargo2Dist' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Observacao')
						{
							$session->push('usuarioMeta', ['observacaoDist' => $item_meta['meta_value'] ]);
						}

					}

				}

				//Empresa
				if($usuario['tipo_usuario'] == 4)
				{
					foreach($usuarioMeta as $item_meta)
					{
						if($item_meta['meta_key'] === 'Nome')
						{
							$session->push('usuarioMeta', ['nomeEmpre' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'CNPJ')
						{
							$session->push('usuarioMeta', ['cnpjEmpre' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Telefone')
						{
							$session->push('usuarioMeta', ['telEmpre' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Endereco')
						{
							$session->push('usuarioMeta', ['endEmpre' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Area_Atuacao')
						{
							$session->push('usuarioMeta', ['areaEmpre' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Responsavel')
						{
							$session->push('usuarioMeta', ['responEmpre' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Cargo')
						{
							$session->push('usuarioMeta', ['cargoEmpre' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'E-mail')
						{
							$session->push('usuarioMeta', ['emailEmpre' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Observacao')
						{
							$session->push('usuarioMeta', ['observacaoEmpre' => $item_meta['meta_value'] ]);
						}
					}

				}

				//Profissionais
				if($usuario['tipo_usuario'] == 5)
				{
					foreach($usuarioMeta as $item_meta)
					{
						if($item_meta['meta_key'] === 'Nome')
						{
							$session->push('usuarioMeta', ['nomeProf' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'CPF')
						{
							$session->push('usuarioMeta', ['cpfProf' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'CRP')
						{
							$session->push('usuarioMeta', ['crpProf' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Telefone')
						{
							$session->push('usuarioMeta', ['telProf' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Endereco')
						{
							$session->push('usuarioMeta', ['endProf' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'E-mail')
						{
							$session->push('usuarioMeta', ['emailProf' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Observacao')
						{
							$session->push('usuarioMeta', ['observacaoProf' => $item_meta['meta_value'] ]);
						}
					}

				}

				//Examinando
				if($usuario['tipo_usuario'] == 6)
				{
					foreach($usuarioMeta as $item_meta)
					{
						if($item_meta['meta_key'] === 'Nome')
						{
							$session->push('usuarioMeta', ['nomeExam' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'CPF')
						{
							$session->push('usuarioMeta', ['cpfExam' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Data_Nascimento')
						{
							$session->push('usuarioMeta', ['dataNasceExam' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Sexo')
						{
							$session->push('usuarioMeta', ['sexoExam' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Escolaridade')
						{
							$session->push('usuarioMeta', ['escolarExam' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Informacao_Adc')
						{
							$session->push('usuarioMeta', ['infoadcExam' => $item_meta['meta_value'] ]);
						}
						if($item_meta['meta_key'] === 'Observacao')
						{
							$session->push('usuarioMeta', ['observacaoExam' => $item_meta['meta_value'] ]);
						}
					}

				}

				//*** AÇÃO DO POST ***/
				if($this->request->getMethod() === 'post')
				{
					//Faz um clear parts nos agregados
					$del_usuarioMeta  = new Usuario_Meta_Model;
					foreach($del_usuarioMeta->getUserMeta($id) as $meta )
					{
						$del_usuarioMeta->delete($meta['id']);
					}

					//PEGA OS DADOS E SALVA
					$usuarioUpdate = new Usuarios_model;

					$dados['id']                = $id;
					$dados['nome']              = $this->request->getPost('nome');
					$dados['tipo_usuario']      = $this->request->getPost('tipo_usuario');
					$dados['email']             = $this->request->getPost('email');
					$dados['login']             = $this->request->getPost('login');
					$dados['senha']             = $this->request->getPost('senha');
					$dados['senha_antiga']      = $this->request->getPost('senha_antiga');
					//$dados['primeiro_acesso'] = $this->request->getPost('primeiro_acesso');
					//$dados['chave_ativacao']  = $this->request->getPost('chave_ativacao');
					//$dados['chave_seguranca'] = $this->request->getPost('chave_seguranca');
					$dados['status']            = $this->request->getPost('status');

					//Atualiza os do Usuário dados no banco
					$usuarioUpdate->save($dados);

					//** Atualiza a Meta Key
					
					//** Atualiza a Meta Key
					//** Usuário Meta Key 'Admin Supervisor === 1' 
					$nivelUser = $this->request->getPost('tipo_usuario');;
					if($nivelUser == 1)
					{
						$obj_usuarioMetaUp       = new Usuario_Meta_Model;

						//Nome
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Nome';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('nome');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//E-mail
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'E-mail';					
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('email');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//cargo
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Cargo';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('cargoSuper');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);
					}
					elseif( $nivelUser == 2)
					{
						$obj_usuarioMetaUp       = new Usuario_Meta_Model;

						//Nome
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Nome';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('nome');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//E-mail
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'E-mail';					
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('email');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//cargo
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Cargo';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('cargoSupor');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);
					}
					elseif( $nivelUser == 3)
					{
						$obj_usuarioMetaUp       = new Usuario_Meta_Model;

						//Nome
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Nome';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('nomeDist');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//CNPJ
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'CNPJ';					
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('cnpjDist');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Telefone
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Telefone';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('telDist');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Responsavel 1
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Responsavel';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('resp1Dist');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Cargo 1
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Cargo_1';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('cargo1Dist');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//E-mail Cargo 1
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'E-mail_Cargo_1';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('emailcargo1Dist');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Responsavel 2
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Responsavel_2';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('resp2Dist');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Cargo 2
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Cargo_2';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('cargo2Dist');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//E-mail Cargo 2
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'E-mail_Cargo_2';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('emailcargo2Dist');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Observação
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Observacao';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('observacaoDist');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);
					}
					elseif( $nivelUser == 4)
					{
						$obj_usuarioMetaUp       = new Usuario_Meta_Model;

						//Nome
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Nome';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('nomeEmpre');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//CNPJ
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'CNPJ';					
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('cnpjEmpre');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Telefone
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Telefone';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('telEmpre');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Endereço
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Endereco';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('endEmpre');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Área de Atuação
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Area_Atuacao';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('areaEmpre');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Responsavel
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Responsavel';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('responEmpre');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//cargo
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Cargo';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('cargoEmpre');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//E-mail
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'E-mail';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('emailEmpre');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Observação
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Observacao';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('observacaoEmpre');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);
					}
					elseif( $nivelUser == 5)
					{
						$obj_usuarioMetaUp       = new Usuario_Meta_Model;

						//Nome
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Nome';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('nomeProf');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//CPF
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'CPF';					
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('cpfProf');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//CRP
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'CRP';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('crpProf');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Telefone
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Telefone';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('telProf');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Endereco
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Endereco';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('endProf');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//E-mail
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'E-mail';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('emailProf');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Observação
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Observacao';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('observacaoProf');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);
					}
					elseif( $nivelUser == 6)
					{
						$obj_usuarioMetaUp       = new Usuario_Meta_Model;

						//Nome
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Nome';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('nomeExam');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//CPF
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'CPF';					
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('cpfExam');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//Data de nasmimento
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Data_Nascimento';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('dataNasceExam');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//SEXO
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Sexo';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('sexoExam');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//ESCOLARIDADE
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Escolaridade';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('escolarExam');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//INFORMAÇÕES ADICIONAIS
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Informacao_Adc';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('infoadcExam');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);

						//OBSERVAÇÃO
						$dados_usuarioMetaUp['id_usuario'] = $id;
						$dados_usuarioMetaUp['meta_key']   = 'Observacao';
						$dados_usuarioMetaUp['meta_value'] = $this->request->getPost('observacaoExam');
						$obj_usuarioMetaUp->save($dados_usuarioMetaUp);
					}
					else
					{
						$data['msg'] = 'Erro ao tentar identificar o tipo de usuário (cod:0001)';
					}
					
				}//post	

				echo view('usuarioEdit_view', $data);

			}
			else
			{
				$data['msg'] = '';
				echo view('dashboard_view', $data);
			}
		}
		catch(Exception $e)
		{
			log_message('error ',$e->getMessage());
			TTransaction::rollback();
		}
	}//editarUsuario3

		

	public function delUsuario($id)
	{	
		$dadosUsuario = session('dadosUsuario');
		//controle de usuário
		$array_tipo_user = ['1' =>'1', '2' =>'2', '6' =>'6'];
		$dadosUser = session('dadosUsuario');
		if(in_array($dadosUsuario['tipo_usuario'], $array_tipo_user))
		{	
			$usuario = new Usuarios_model;
			
			$dados['id']     = $id;
			$dados['status'] = 'D';
			$dados['deletado'] = new Time('now', 'America/Sao_Paulo');;

			//Apaga o usuário
			$usuario->save($dados);

			//Atualiza os usuários
			$atualizaUser = new Usuarios_model;
			$data['listar_usuarios'] = $usuario->getUsuario();
		
			echo view('usuarioList_view', $data);
		}
		else
		{
			$data['msg'] = '';
			echo view('dashboard_view', $data);
		}	

	}//delUsuario

    
}//controller
