<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Usuario_Meta_Model extends Model
{
    protected $table         = 'usuario_meta';
    protected $primaryKey    = 'id';

    //protected $returnType    = 'App\Entities\Cadastro';
    protected $returnType    = 'array';

    protected $allowedFields = ['id_usuario','meta_key', 'meta_value'];

    protected $useTimestamps = true;

    protected $createdField  = '';
    protected $updatedField  = '';

    
    // Pega usuario_meta pelo ID
    public function getUserMeta($id_usuario=null)
    {	
        if( $id_usuario != null )
        {
            return $this->where('id_usuario',$id_usuario)
                        ->findAll();//first
        }
        return null; // ou false, mas prefiro null
    }

     /*
        Pega os usuarios associados pelo ID da empresa(ID_EMPRESA) .
    */
    public function getAssociados($id_empresa = false)
    {
        $this->select('um.id as id_meta, um.meta_key as meta_key, um.meta_value as meta_value, um.id_usuario, u.nome, u.email');
        $this->from('usuario_meta as um');
        $this->join("usuarios as u", "u.id=um.id_usuario");

        $this->where('um.meta_key','Id_Empresa');
        $this->where('um.meta_value',$id_empresa);
        
        $query = $this->distinct()->get();
        return $query->getResultArray();
        
    }//getUserPrograma

    public function getAssociadosId($id_empresa = false)
    {
        $this->select('um.id_usuario');
        $this->from('usuario_meta as um');
        $this->join("usuarios as u", "u.id=um.id_usuario");

        $this->where('um.meta_key','Id_Empresa');
        $this->where('um.meta_value',$id_empresa);
        
        $query = $this->distinct()->get();
        return $query->getResultArray();
        
    }//getUserPrograma

    /*
        Pega os usuarios que não são associados.
    */
    public function getNaoAssociados($id)
    {
        $db = db_connect();
       
        $builder =  $db->table('usuarios u');
        $builder->where('tipo_usuario', 5);
        $builder->havingNotIn('id', $id);
        
        $query = $builder->get();
        return $query->getResultArray();
    
    }//getNaoAssociados

    //pega o ID das empresas associadas de um Profissional
    public function getIdEmpresasAssociados($id_profissional = false)
    {
        $this->select('um.meta_value as id_empresa');
        $this->from('usuario_meta as um');
        $this->join("usuarios as u", "u.id=um.id_usuario");

        $this->where('um.id_usuario', $id_profissional);
        $this->where('um.meta_key','Id_Empresa');
        
        $query = $this->distinct()->get();
        return $query->getResultArray();
        
    }//getUserPrograma

     /*
        Pega o objeto usuario do tipo Empresa que são associadas de um profissional.
    */
    public function getEmpresasAssociados($id)
    {
        $db = db_connect();
       
        $builder =  $db->table('usuarios u');
        $builder->where('tipo_usuario', 4);
        $builder->havingIn('id', $id);
        
        $query = $builder->get();
        return $query->getResultArray();
    
    }//getNaoAssociados
    
}