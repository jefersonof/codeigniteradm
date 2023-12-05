<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Lotes_Model extends Model
{
    protected $table         = 'lotes';
    protected $primaryKey    = 'id';

    //protected $returnType    = 'App\Entities\Cadastro';
    protected $returnType    = 'array';

    protected $allowedFields = ['id_usuario','id_instrumento', 'quantidade', 'valor_cupom', 'data_geracao'];

    protected $useTimestamps = true;

    protected $createdField  = 'data_geracao';
    protected $updatedField  = '';

    public function getLoteCupom($codigo = false)
    {
        $db = db_connect();
        $builder =  $db->table('lotes l');

        $builder->join('cupons c', 'c.id_lote = l.id');
        //$builder->join('sistema_grupo_usuario gu', 'gu.sistema_usuario_id = u.id');

        $builder->where('codigo',$codigo);
        
        $query = $builder->get();

        return $query->getResultArray();

    }
    
    // exemplo de pegar pelo id
    public function getLoteId($id=null)
    {	
        if( $id != null )
        {
            return $this->where('id',$id)
                        ->first();
        }
        return null; // ou false, mas prefiro null
    }

   
    
}