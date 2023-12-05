<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CadastroModel extends Model
{
    protected $table         = 'cadastro';
    protected $primaryKey    = 'id';

    protected $returnType    = 'App\Entities\Cadastro';

    protected $allowedFields = ['nome','email','senha','celular'];

    protected $useTimestamps = true;

    protected $createdField  = 'data_cadastro';
    protected $updatedField  = 'data_update';
    
    // exemplo de pegar pelo email
    public function getByEmail($email=null)
    {	
        if( $email != null )
        {
            return $this->where('email',$email)
                        ->first();
        }
        return null; // ou false, mas prefiro null
    }
    
}