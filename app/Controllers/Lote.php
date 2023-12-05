<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;
use App\Models\Usuarios_model;
use App\Models\Lotes_model;
use App\Models\Cupons_model;
use App\Models\Instrumentos_model;
use App\Models\Usuarios_Testes_model;
use App\Models\Historico_Liberacoes_Model;

class Lote extends Controller
{
    public function index()
    {
		$data['msg'] = '';
        $data['msg_resgate'] = '';
        echo view('dashboard_view', $data);	

    }//index

    public function gerarCupons()
    {
        $dadosUsuario = session('dadosUsuario');

        $data['msg_resgate'] = '';
        $data['msg'] = '';
        
        //pega os instrumentos
		$instrumentos = new Instrumentos_model;
		$data['todos_instrumentos'] = $instrumentos->getInstrumentos();

		//pega os testes do usuários 
		$userTestes = new Cupons_model;
		$data['usuarios_testes'] = $userTestes->getCuponsTestes($dadosUsuario['id']);

        //ação post
        if($this->request->getMethod() === 'post')
		{
            //pega dados da sessão
            $dadosUsuario = session('dadosUsuario');
          
			//monta os dados
			$model_lote = new Lotes_model();
			$dados_lote['id_usuario']     = $dadosUsuario['id'];
			$dados_lote['id_instrumento'] = $this->request->getPost('id_instrumento');;
			$dados_lote['quantidade']     = $this->request->getPost('quantidade');
			$dados_lote['valor_cupom']    = $this->request->getPost('valor_cupom');
			$dados_lote['data_geracao']   = new Time('now', 'America/Sao_Paulo');
            
            //salva o lote
			$model_lote->insert($dados_lote);
            //pega o id do último Registro
			$id_lote =  $model_lote->getInsertID();

            //código Fake
            $cod = 'bax'. $id_lote ;
            //faz um for e salva os Cupons
            for($i = 0; $i<$dados_lote['quantidade']; $i++)
            {
                //salva o Cupom
                $model_cupom = new Cupons_model();
                $dados_cupom['id_lote']    = $id_lote;
                //$dados_cupom['id_usuario'] = $dadosUsuario['id'];
                $dados_cupom['valor']      = $dados_lote['valor_cupom'];
                $dados_cupom['codigo']     = $cod . $i;
                $dados_cupom['status']     = 'A';

                $model_cupom->insert($dados_cupom);
            }
            $data['msg'] = 'Lote Salvo !';

          
            //Atualiza os Cupons de teste na View
            //pega os testes do usuários 
		    $userTestes = new Cupons_model;
		    $data['usuarios_testes'] = $userTestes->getCuponsTestes($dadosUsuario['id']);

		}//if
        echo view('dashboard_view', $data);
    }//gerarCupons
	
    
}//controller
