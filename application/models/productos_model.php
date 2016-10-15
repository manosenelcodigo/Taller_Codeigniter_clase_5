<?php
class productos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    //métodos de consulta a la base de datos
    //los que van a utilizar el
    //active record
    
    public function getTodos()
    {
        $query=$this->db
                ->select("id,nombre,precio,stock,fecha")
                ->from("productos")
                ->order_by("id","desc")
                ->get();
        //echo $this->db->last_query();exit;        
        return $query->result();            
    }
}

