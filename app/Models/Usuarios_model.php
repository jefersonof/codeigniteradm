<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Usuarios_Model extends Model
{
    protected $table         = 'usuarios';
    protected $primaryKey    = 'id';

    //protected $returnType    = 'App\Entities\Cadastro';
    protected $returnType    = 'array';

    protected $allowedFields = ['tipo_usuario', 'nome', 'email', 'login', 'senha', 'senha_antiga', 'primeiro_acesso', 'chave_ativacao', 'chave_seguranca', 'status', 'deletado'];

    protected $useTimestamps = true;

    protected $createdField  = 'criado';
    protected $updatedField  = 'atualizado';
    
    // exemplo de pegar pelo id
    public function getUsuarios($id=null)
    {	
        if( $id != null )
        {
            return $this->where('id',$id)
                        ->first();
        }
        return null; // ou false, mas prefiro null
    }

     /* Todos Usuários */
     public function getUsuario($id = null)
     {

        /* return all users */
        if($id) return $this->findAll();

        /* return user by id */
        return $this->find($id);
    }

     /* Todos Usuários do Tipo Profissional */
     public function getUsuarioProfissional($id = null)
     {

        /* return all users */
        if($id) return $this->where('tipo_usuario', 5)->findAll();

        /* return user by id */
        return $this->where('tipo_usuario', 5)->find($id);
    }

     /*
        * Login do usuário $id
    */
    public function loginUsuario($login=false, $senha=false)
    {
        $db = db_connect();
        $builder =  $db->table('usuarios');

        $builder->where('login',$login);
        
        $builder->where('senha',$senha);
        
        $query = $builder->get();

        return $query->getResultArray();

    }//getUserPrograma

     

    
}