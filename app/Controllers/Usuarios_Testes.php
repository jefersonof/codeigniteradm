<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;
use App\Models\Usuarios_Testes_model;
use App\Models\Instrumentos_model;
use App\Models\Cupons_model;
use App\Models\Lotes_model;
use App\Models\Historico_Liberacoes_Model;
use App\Models\Usuario_Meta_Model;

class Usuarios_Testes extends Controller
{
    public function index()
    {
			

    }//index
	
    public function resgate()
    {
        //pega dados da sessão
        $dadosUsuario = session('dadosUsuario');

        //pega os testes do usuários 
        $userTestes = new Cupons_model;
        $data['usuarios_testes'] = $userTestes->getCuponsTestes($dadosUsuario['id']);

        //pega os testes do usuários 
		$model_userTestes = new Usuarios_Testes_model;
		$data['total_de_testes'] = $model_userTestes->getCalculaTeste($dadosUsuario['id']);

        $data['msg_resgate'] = '';
        $data['msg']         = '';
        //pega os instrumentos
		$instrumentos = new Instrumentos_model;
		$data['todos_instrumentos'] = $instrumentos->getInstrumentos();

        //ação post
        if($this->request->getMethod() === 'post')
        {
            //busca o cupom
            $codigo = $this->request->getPost('codigo');
            
            $model_cupom = new Cupons_model;
            $model_lote  = new Lotes_model;
            $obj_cupom   = $model_lote->getLoteCupom($codigo);

            //pega o total de testes anterior do usuários 
            $testes_user = $model_userTestes->getCalculaTeste($dadosUsuario['id']);
            $total_testes_anterior = ($testes_user[0]['correcao'] + $testes_user[0]['aplicacao']);

            //se existir um objeto, ele vai estar na posição[0](padrão CI4)
            if($obj_cupom)
            {
                if($obj_cupom[0]['status'] === 'A' and is_null($obj_cupom[0]['data_resgate']))
                {   
                    $cupom_update['id']           = $obj_cupom[0]['id'];
                    $cupom_update['status']       = 'U';
                    $cupom_update['id_usuario']   = $dadosUsuario['id'];
                    $cupom_update['data_resgate'] = new Time('now', 'America/Sao_Paulo');
                    //atualiza o cupom
                    $model_cupom->save($cupom_update); 

                    //salva o 'Usuarios_Testes'
                    $model_usuarios_testes = new Usuarios_Testes_model;
                    $dados_usuarios_testes['id_usuario']     = $dadosUsuario['id'];
                    $dados_usuarios_testes['id_instrumento'] = $obj_cupom[0]['id_instrumento'];

                    //Pega o tipo de Licença
                    $tipo_licenca = $this->request->getPost('tipo_licenca');
                    if($tipo_licenca === 'correcao')
                    {
                        $dados_usuarios_testes['correcao'] = $obj_cupom[0]['valor_cupom'] ;
                        $quantidade =  $obj_cupom[0]['valor_cupom'];
                    }
                    if($tipo_licenca === 'aplicacao')
                    {
                        $dados_usuarios_testes['aplicacao'] = $obj_cupom[0]['valor_cupom'] ;
                        $quantidade =  $obj_cupom[0]['valor_cupom'];
                    }
                    
                    //salva o Usuarios_Testes_model
                    $model_usuarios_testes->insert($dados_usuarios_testes);

                    //faz o calculo atualizados do saldo dos testes
                    $testes_user = $model_userTestes->getCalculaTeste($dadosUsuario['id']);
                    $total_testes_atualizado = ($testes_user[0]['correcao'] + $testes_user[0]['aplicacao']);
              
                    // ** Registra o Histórico de liberações **//
                      
                    /*$id_solicitante = NULL;
                    //se tiver um solicitante pega se nao fica NULL
                    if*/

                    $model_historico_liberacoes = new Historico_Liberacoes_Model;
                    $dados_historico_liberacoes['id_usuario']       = $dadosUsuario['id'];
                    $dados_historico_liberacoes['id_solicitante']   = $dadosUsuario['id'];
                    $dados_historico_liberacoes['id_liberou']       = $dadosUsuario['id'];
                    $dados_historico_liberacoes['data_solicitacao'] = new Time('now', 'America/Sao_Paulo');
                    $dados_historico_liberacoes['quantidade']       =  $quantidade ;
                    $dados_historico_liberacoes['operacao']         = '+';
                    $dados_historico_liberacoes['saldo_anterior']   = $total_testes_anterior;
                    $dados_historico_liberacoes['saldo_atualizado'] = $total_testes_atualizado;
                    $dados_historico_liberacoes['id_instrumento']   = $dados_usuarios_testes['id_instrumento'];

                    //salva o Historico_Liberacoes_Model
                    $model_historico_liberacoes->insert($dados_historico_liberacoes);

                    //verifica qual o perfil está em uso para alimentar a variável das licenças
                    $usuarioLogado = session('UserLogado');

                    if($usuarioLogado == 'Profissional')
                    {
                        //pega os testes do usuários 
                        $userTestes = new Usuarios_Testes_model;
                        $data['total_de_testes'] = $userTestes->getCalculaTeste($dadosUsuario['id']);
                    } 
                    else
                    {
                        //pega os testes do usuários 
                        $userTestes = new Usuarios_Testes_model;
                        $data['total_de_testes_empresa'] = $userTestes->getCalculaTeste($usuarioLogado);
                        //$data['total_de_testes_empresa'] = $userTestes->getCalculaTeste(23);
                    }

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

                    //Atualiza os Testes de Usuário na View
                    //pega os testes do usuários 
                    $userTestes = new Cupons_model;
                    $data['usuarios_testes'] = $userTestes->getCuponsTestes($dadosUsuario['id']);
                    $data['total_de_testes'] = $model_userTestes->getCalculaTeste($dadosUsuario['id']);


                    
                    $data['msg_resgate'] = 'Código resgatado com sucesso!';
                }//if
                elseif($obj_cupom[0]['status'] === 'U' and !is_null($obj_cupom[0]['data_resgate']))
                {
                    $data['msg_resgate'] = 'o Código já foi resgatado!';
                }
                elseif($obj_cupom[0]['status'] === 'I')
                {
                    $data['msg_resgate'] = 'O Código está initivo!';
                }
                else{
                    $data['msg_resgate'] = 'Código não encontrado, Favor contatar o suporte!';
                }
            }
            else
            {
                $data['msg_resgate'] = 'Código não encontrado, Favor contatar o suporte!';
            }
           
        }//if 
        echo view('dashboard_view', $data); 
    }
    
}//controller