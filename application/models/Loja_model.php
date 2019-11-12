<?php
class Loja_model extends CI_Model
{

	var $table = "produtos";
	function __construct()
	{
		parent::__construct();
	}
	function get_produtos($sort = 'codigoProduto', $order = 'asc', $limit = null, $offset = null)
	{
		$this->db->order_by($sort, $order);
		if ($limit)
			$this->db->limit($limit, $offset);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		}
	}
	function CountAll()
	{
		return $this->db->count_all($this->table);
	}

	function NovoCliente($dados)
	{
		if ($this->db->insert('clientes', $dados)) :
			return true;
		else :
			return false;
		endif;
	}


	function NovoPedido($dados)
	{
		if ($this->db->insert('pedidos', $dados)) :
			return true;
		else :
			return false;
		endif;
	}

	function NovoPedidoDetalhes($dados)
	{
		if ($this->db->insert('pedidos_detalhes', $dados)) :
			return true;
		else :
			return false;
		endif;
	}

	public function NumPedido()
	{
		$this->db->select("*");
		$this->db->from("pedidos");		
		//$clientes = $this->db->get("pedidos");
		$this->db->limit(1);
		$this->db->order_by('pedido_id',"DESC");
		$query = $this->db->get();
		$result = $query->result();
		
		return $result;
	}


	public function valida_login($usuario, $senha)
	{
		$this->db->where('cliente_email', $usuario);
		$this->db->where('cliente_senha', $senha);
		
		$clientes = $this->db->get("clientes");

		if ($clientes->num_rows() == 1) {
			return $clientes->result(); // RETORNA VERDADEIRO
		}
		//return $usuarios;
	}

	public function buscacliente($usuario)
	{
		$this->db->where('cliente_email', $usuario);
		
		$clientes = $this->db->get("clientes");

		if ($clientes->num_rows() == 1) {
			return $clientes->result(); // RETORNA VERDADEIRO
		}
		//return $usuarios;
	}

	function get_pedidos($sort = 'pedido_id', $order = 'asc', $limit = null, $offset = null)
	{
		$this->db->order_by($sort, $order);
		if ($limit)
			$this->db->limit($limit, $offset);
		$query = $this->db->get('pedidos');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		}
	}

	function ContaPedidos($id)
	{	$this->db->where('cliente_id', $id);
		return $this->db->count_all('pedidos');
	}

	public function pega_pedido($id)
	{
		$this->db->where('pedido_id', $id);
		
		$pedido = $this->db->get("pedidos");

		if ($pedido->num_rows() == 1) {
			return $pedido->result(); // RETORNA VERDADEIRO
		}
		//return $usuarios;
	}

	public function detalhe_pedido($id)
	{
		
		$this->db->where('pedido_id', $id);
		
		$detalhes = $this->db->get("pedidos_detalhes");

		
			return $detalhes->result(); // RETORNA VERDADEIRO
		
		//return $usuarios;
	}
}
