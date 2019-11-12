<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Carrinho extends CI_Controller {
	
	public function __construct()
	{
			parent::__construct();
			//$this->load->model('loja_model');
	}
		
	public function add_item(){
		$this->cart->product_name_rules = '[:print:]'; 
		
		$id_produto = $this->input->post('id_produto');
		$descricao = $this->input->post('descricao');
		$quantidade = $this->input->post('quantidade');
		$preco = $this->input->post('preco');
		
		if (empty($quantidade)) 
			$quantidade = 1;
		
		$data = array(
           'id'      => $id_produto,
           'qty'     => $quantidade,
           'price'   => $preco,
           'name'    => $descricao
        );
		
		if ($this->cart->insert($data)) {
				
	    	$this->session->set_flashdata('msg','
	    	<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    	<strong>Produto adicionado com sucesso!!!</strong><br>
	    	</div>');
				
            redirect($this->input->post('segmento'));
            //redirect('/');
			
		} else {
			echo "Não foi possível inserir. <pre>";
			print_r($data);
			echo "</pre>";				
		}
	}
	
	public function update_item(){
		$id_produto = $this->input->post("rowid");
		$quantidade = $this->input->post("qty");
		
		$dados[] = array(
			"rowid" => $id_produto,
			"qty" => $quantidade
		);
		
		//com os dados já preparados, basta dar um update no carrinho
		$this->cart->update($dados);
		
		//redirect(base_url('loja'));
		redirect($this->input->post('segmento'));
	}
	
	public function del_item($rowid) 
	{
		$this->cart->update(array(
				'rowid' => $rowid, 
				'qty' => 0
			)
		); 
		redirect($this->input->post('segmento'));
	}
	
	public function del_cart(){
		$this->cart->destroy();
		redirect($this->input->post('segmento'));
	}
        
        public function view_cart()
	{
		
		$this->load->view('cart');
	}
        public function view_cart_topo()
	{
		
		$this->load->view('cart_topo');
	}
}
