<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Catalogo_Testes_Model extends Model
{
    protected $table         = 'catalogo_testes';
    protected $primaryKey    = 'id';

    //protected $returnType    = 'App\Entities\Cadastro';
    protected $returnType    = 'array';

    protected $allowedFields = ['nome', 'descricao', 'link_compra', 'arquivo', 'img', 'site_distribuidor'];

    protected $useTimestamps = true;

    protected $createdField  = '';
    protected $updatedField  = '';
    
    
    /* Todos Usuários */
    public function getCatalogo_TestesId($id = null)
    {
       /* return all users */
       if($id) return $this->findAll();

       /* return user by id */
       return $this->find();

      
   }

    
}