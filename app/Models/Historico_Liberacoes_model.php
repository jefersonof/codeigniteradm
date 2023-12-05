<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Historico_Liberacoes_Model extends Model
{
    protected $table         = 'historico_liberacoes';
    protected $primaryKey    = 'id';

    //protected $returnType    = 'App\Entities\Cadastro';
    protected $returnType    = 'array';

    protected $allowedFields = ['id_usuario', 'id_solicitante', 'id_liberou', 'id_instrumento', 'codigo', 'data_solicitacao', 'quantidade', 'operacao', 'saldo_anterior', 'saldo_atualizado'];

    protected $useTimestamps = true;

    protected $createdField  = 'data_liberacao';
    protected $updatedField  = '';
    
    // exemplo de pegar pelo id
    public function getLogId($id=null)
    {	
        if( $id != null )
        {
            return $this->where('id',$id)
                        ->first();
        }
        return null; // ou false, mas prefiro null
    }
    
}