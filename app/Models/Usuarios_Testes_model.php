<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Usuarios_Testes_model extends Model
{
    protected $table         = 'usuarios_testes';
    protected $primaryKey    = 'id';

    //protected $returnType    = 'App\Entities\Cadastro';
    protected $returnType    = 'array';

    protected $allowedFields = ['id_usuario', 'id_instrumento', 'correcao', 'aplicacao'];

    protected $useTimestamps = true;

    protected $createdField  = '';
    protected $updatedField  = '';
    
    /*
        Calcula o número de testes.
    */ 
    public function getCalculaTeste($id_usuario=null)//getUserTestes
    {	
        if( $id_usuario != null )
        {
            $this->selectSum('correcao');
            $this->selectSum('aplicacao');
            return $this->where('id_usuario',$id_usuario)
                        ->findAll();
        }
        return null; // ou false, mas prefiro null
    }

    public function getUserTestesId($id_usuario=null)
    {	
        if( $id_usuario != null )
        {
            return $this->where('id_usuario',$id_usuario)
                        ->first();
        }
        return null; // ou false, mas prefiro null
    }
    
}