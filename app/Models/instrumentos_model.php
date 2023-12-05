<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Instrumentos_Model extends Model
{
    protected $table         = 'instrumentos';
    protected $primaryKey    = 'id';

    //protected $returnType    = 'App\Entities\Cadastro';
    protected $returnType    = 'array';

    protected $allowedFields = ['nome','descricao'];

    protected $useTimestamps = true;

    protected $createdField  = 'criado';
    protected $updatedField  = 'atualizado';

    /* Todos Usuários */
    public function getInstrumentos($id = null)
    {
       /* return all users */
       if($id) return $this->findAll();

       /* return user by id */
       return $this->find($id);
   }
    
    // exemplo de pegar pelo id
    public function getInstrumentosId($id=null)
    {	
        if( $id != null )
        {
            return $this->where('id',$id)
                        ->first();
        }
        return null; // ou false, mas prefiro null
    }
    
}