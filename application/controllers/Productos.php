<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("frontend");
    }
    
 
	public function index()
	{
		
        $datos=$this->productos_model->getTodos();
        //print_r($datos);exit;
        $this->layout->view("index",compact('datos'));
	}
    
}
