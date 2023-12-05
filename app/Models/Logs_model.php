<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class LogsModel extends Model
{
    protected $table         = 'logs';
    protected $primaryKey    = 'id';

    //protected $returnType    = 'App\Entities\Cadastro';
    protected $returnType    = 'array';

    protected $allowedFields = ['id_usuario', 'ip', 'tarefa', 'sistema'];

    protected $useTimestamps = true;

    protected $createdField  = 'data_tarefa';
    //protected $updatedField  = 'atualizado';
    
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