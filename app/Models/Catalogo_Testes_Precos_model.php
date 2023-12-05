<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Catalogo_Testes_Precos_Model extends Model
{
    protected $table         = 'catalogo_testes_precos';
    protected $primaryKey    = 'id';

    //protected $returnType    = 'App\Entities\Cadastro';
    protected $returnType    = 'array';

    protected $allowedFields = ['id_catalogo', 'faixa', 'preco'];

    protected $useTimestamps = true;

    protected $createdField  = '';
    protected $updatedField  = '';
    
    
    /* Todos Usuários */
    public function getCatalogo_Testes_Precos($id = null)
    {
       /* return all users */
       if($id) return $this->findAll();

       /* return user by id */
       return $this->find();

      
   }

    
}