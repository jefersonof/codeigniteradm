<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Cupons_Model extends Model
{
    protected $table         = 'cupons';
    protected $primaryKey    = 'id';

    //protected $returnType    = 'App\Entities\Cadastro';
    protected $returnType    = 'array';

    protected $allowedFields = ['id_lote','id_usuario', 'valor', 'codigo', 'status', 'data_resgate'];

    protected $useTimestamps = true;

    protected $createdField  = '';
    protected $updatedField  = '';
    
   // Busca cupom pelo código
   public function getCuponsCod($codigo=null)
   {	
       if( $id != null )
       {
           return $this->where('codigo',$codigo)
                       ->first();
       }
       return null; // ou false, mas prefiro null
   }
   
    // exemplo de pegar pelo id
    public function getCuponsId($id=null)
    {	
        if( $id != null )
        {
            return $this->where('id',$id)
                        ->first();
        }
        return null; // ou false, mas prefiro null
    }

    public function getCuponsTestes($id_usuario = false)
    {
        $this->select('c.id as cupon_id, c.id_lote, c.valor, c.data_resgate, l.quantidade, l.valor_cupom, l.id_usuario, u.nome');
        $this->from('cupons as c');
        $this->join("lotes as l", "l.id=c.id_lote");
        $this->join("usuarios_testes as ut", "ut.id_usuario=c.id_usuario");
        $this->join("usuarios as u", "u.id=l.id_usuario");
        $this->where('c.id_usuario',$id_usuario);
        //$query = $this->get();
        
        $query = $this->distinct()->get();
        //$query = $this->get();

        return $query->getResultArray();
        
    }//getUserPrograma
    
}