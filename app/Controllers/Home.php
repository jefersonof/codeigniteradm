<?php

namespace App\Controllers;

use App\Models\CadastroModel; // pra chamar mais fácil ali embaixo

class Home extends BaseController
{
    public function index()
    {
        // usando o helper de formulário pra salvar as parada
        helper('form');

        // serviço de sessao pra msg de sucesso e outras coisas de sessão se precisar
		$session = session();
        $cadastro['session'] = $session;

		// Model de cadastros
		$cadastroModel = new \App\Models\CadastroModel();
        
		// pega todos cadastros pra passar pra view
		$cadastro['pessoas'] = $cadastroModel->findAll();

        // validação e inserção
		$rules = [
			'nome'    => 'trim|required',
			'email'   => 'trim|required|valid_email|is_unique[cadastro.email]', // aqui valida o email, e ve no banco de dados se é único
			'senha'   => 'trim|required|matches[pswConf]|min_length[4]|max_length[100]', // aqui compara as senhas, o pswConf com a senha
			'pswConf' => 'trim|required|min_length[4]|max_length[100]', // aqui compara as senhas, o pswConf com a senha
			'celular' => 'trim|required|max_length[32]'
		];

        // se o método é get ou deu erro de validação
		if ($this->request->getMethod() === 'get' || ! $this->validate($rules))
        {
			$cadastro['validation'] = $this->validator;

			echo view('welcome_message',$cadastro);
			
        }
        // método é post e validou regras
		elseif ( $this->request->getMethod() === 'post' && $this->validate( $rules ) )
		{

			// dados (esse getPost pega tudo num tapasso)
			$dados = $this->request->getPost();

			// insert cadastro - chama Model e entidade
			// $cadastroModel = new \App\Models\CadastroModel(); //-> chamei a model mais pra cima

			$cadastro      = new \App\Entities\Cadastro(); // chama entidade de Classe
			
            // preenche (fill)
			$cadastro->fill($dados); // preenche com POST usando entidade da Classe
			$cadastroModel->save($cadastro); // salva usando a model, não a entidade
			
			return redirect()->to( base_url() )->with('sucesso','Cadastrado com sucesso');
			
		}

    }

	//--------------------------------------------------------------------
    
	public function editar()
    {
        // usando o helper de formulário pra salvar as parada
        helper('form');

        // serviço de sessao pra msg de sucesso e outras coisas de sessão se precisar
		$session = session();
        $cadastro['session'] = $session;

		// Model de cadastros
		$cadastroModel = new \App\Models\CadastroModel();
        
		// serviço de URI/request (pra pegar parametros da URL)
		$uri = new \CodeIgniter\HTTP\URI(current_url());
		
		$idCadastro = $uri->getSegment(3);
        if (! is_numeric($idCadastro) || $idCadastro == '') {
			set_msg('erro', 'Erro. Usuário não encontrado.');
			return redirect()->to(base_url());
		}

		// acha o cadastro pelo id único
		$usuario = $cadastroModel->find($idCadastro);

		// se não encontrou usuario na query $usuario acima, retorna erro e redireciona
		if ($usuario === null) {
			set_msg('erro', 'Erro. Usuário não encontrado.');
			return redirect()->to(base_url());
		}
		// se até aqui deu tudo certo passa dados pra view
		$cadastro['usuario'] = $usuario;

        // validação e inserção
		$rules = [
			'id'   	  => 'trim|required', //input hidden do ID do cadastro
			'nome'    => 'trim|required',
			'email'   => 'trim|required|valid_email|is_unique[cadastro.email,id,{id}]', // aqui valida o email, e ve no banco de dados se é único, menos o próprio ID
			'senha'   => 'trim|required|matches[pswConf]|min_length[4]|max_length[100]', // aqui compara as senhas, o pswConf com a senha
			'pswConf' => 'trim|required|min_length[4]|max_length[100]', // aqui compara as senhas, o pswConf com a senha
			'celular' => 'trim|required|max_length[32]'
		];

        // se o método é get ou deu erro de validação
		if ($this->request->getMethod() === 'get' || ! $this->validate($rules))
        {
			$cadastro['validation'] = $this->validator;

			echo view('editar_cadastro',$cadastro);
			
        }
        // método é post e validou regras
		elseif ( $this->request->getMethod() === 'post' && $this->validate( $rules ) )
		{

			// dados (esse getPost pega tudo num tapasso)
			$dados = $this->request->getPost();

			// update cadastro - chama Model e entidade
			// $cadastroModel = new \App\Models\CadastroModel(); //-> chamei a model mais pra cima

			$cadastro      = new \App\Entities\Cadastro(); // chama entidade de Classe
			
            // preenche (fill)
			$cadastro->fill($dados); // preenche com POST usando entidade da Classe
			$cadastroModel->save($cadastro); // salva usando a model, não a entidade
			
			return redirect()->to( base_url() )->with('sucesso','Atualizado com sucesso');
			
		}

    }

	//--------------------------------------------------------------------
	
	public function deletar(){

		// serviço de URI/request (pra pegar parametros da URL)
		$uri = new \CodeIgniter\HTTP\URI(current_url());
		
		// id do cadastro
		$idCadastro = $uri->getSegment(3);
        if (! is_numeric($idCadastro) || $idCadastro == '') {
			set_msg('erro', 'Erro. Usuário não encontrado.');
			return redirect()->to(base_url());
		}
		
		// apaga cadastro
		$cadastroModel = new CadastroModel();
		$delete = $cadastroModel->delete($idCadastro);
		
		return redirect()->to( base_url() )->with('sucesso','Apagado com sucesso');

    }

}
