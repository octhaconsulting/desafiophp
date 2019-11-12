<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Loja extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('loja_model');
        $this->load->library('session');
    }

    public function index()
    {

        // $data['produtos'] = $this->loja_model->get_produtos();



        $config = array(
            "base_url" => base_url('vitrine/p'),
            "per_page" => 8,
            "num_links" => 8,
            "uri_segment" => 3,
            "total_rows" => $this->loja_model->CountAll(),
            "full_tag_open" => '<ul class="pagination">',
            "full_tag_close" => '</ul></<ul>',
            "attributes" => ['class' => 'page-link'],
            "first_link" => '&lsaquo; Primeira',
            "last_link" => 'Última &rsaquo;',
            "first_tag_open" =>  '<li class="page-item">',
            "first_tag_close" => '</li>',
            "prev_link" => "Anterior",
            "prev_tag_open" => '<li class="page-item">',
            "prev_tag_close" => '</li>',
            "next_link" => "Próxima",
            "next_tag_open" => '<li class="page-item">',
            "next_tag_close" => '</li>',
            "last_tag_open" => '<li class="page-item">',
            "last_tag_close" => '</li>',
            "cur_tag_open" => '<li class="page-item active"><a href="#" class="page-link">',
            "cur_tag_close" => '<span class="sr-only">(atual)</span></a></li>',
            "num_tag_open" => "<li class='page-item'>",
            "num_tag_close" => "</li>"
        );
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['produtos'] = $this->loja_model->get_produtos('descricaoProduto', 'asc', $config['per_page'], $offset);


        //var_dump($produtos);
        //var_dump($data);

        $logado = $this->session->userdata('logado');

        if ($logado) {
            $data['nome'] =  $this->session->userdata('nome');
        }

        //$this->load->view('includes/html_header');
        //$this->load->view('includes/html_menu');
        $data['include'] = 'home';
        $this->load->view('loja', $data);
        //$this->load->view('includes/html_footer');
    }

    public function cart()
    {
        $logado = $this->session->userdata('logado');

        if ($logado) {
            $data['nome'] =  $this->session->userdata('nome');
        }

        $data['include'] = 'cart';
        $this->load->view('loja', $data);
    }

    public function minhaconta()
    {
        $logado = $this->session->userdata('logado');

        if ($logado == true) {

            $cliente = $this->loja_model->buscacliente($this->session->userdata('email'));

            foreach ($cliente as $linha) {
                $id = $linha->cliente_id;
            };

            $data['include'] = 'minha_conta';
            $data['nome'] =  $this->session->userdata('nome');

            $config = array(
                "base_url" => base_url('minha-conta/p'),
                "per_page" => 50,
                "num_links" => 8,
                "uri_segment" => 3,
                "total_rows" => $this->loja_model->ContaPedidos($id),
                "full_tag_open" => '<ul class="pagination">',
                "full_tag_close" => '</ul></<ul>',
                "attributes" => ['class' => 'page-link'],
                "first_link" => '&lsaquo; Primeira',
                "last_link" => 'Última &rsaquo;',
                "first_tag_open" =>  '<li class="page-item">',
                "first_tag_close" => '</li>',
                "prev_link" => "Anterior",
                "prev_tag_open" => '<li class="page-item">',
                "prev_tag_close" => '</li>',
                "next_link" => "Próxima",
                "next_tag_open" => '<li class="page-item">',
                "next_tag_close" => '</li>',
                "last_tag_open" => '<li class="page-item">',
                "last_tag_close" => '</li>',
                "cur_tag_open" => '<li class="page-item active"><a href="#" class="page-link">',
                "cur_tag_close" => '<span class="sr-only">(atual)</span></a></li>',
                "num_tag_open" => "<li class='page-item'>",
                "num_tag_close" => "</li>"
            );
            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
            $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['pedidos'] = $this->loja_model->get_pedidos('pedido_id', 'desc', $config['per_page'], $offset);
    
            
            $this->load->view('loja', $data);

        } else {
            //$data['include'] = 'login';
            redirect(base_url() . 'login/');
        }


       // $this->load->view('loja', $data);
    }

    public function checkout()
    {
        $logado = $this->session->userdata('logado');



        if ($logado == true) {

            $cliente = $this->loja_model->buscacliente($this->session->userdata('email'));

            foreach ($cliente as $linha) {
                $id = $linha->cliente_id;
            };

            //echo $id;

            $pedido = array(
                'pedido_data' => date('Y-m-d H:i:s'),
                'cliente_id' => $id,
                'pedido_total' => $this->cart->total() + 5,
                'pedido_status' => 'AGUARDANDO PAGAMENTO'
            );

            $novo = $this->loja_model->NovoPedido($pedido);

            if ($novo) {
                $numeropedido = $this->loja_model->NumPedido();

                // print_r($numeropedido);
                foreach ($numeropedido as $ped) {
                    $npedido = $ped->pedido_id;
                }



                $i = 1;

                foreach ($this->cart->contents() as $items) :

                    $dados = array(
                        'pedido_id' => $npedido,
                        'produto_id' =>  $items['rowid'],
                        'produto_desc' => $items['name'],
                        'produto_valor' => $items['price'],
                        'produto_qtde' => $items['qty'],
                        'produto_subtotal' => $items['subtotal']
                    );

                    $detalhes = $this->loja_model->NovoPedidoDetalhes($dados);

                   // echo $i;

                    $i++;

                endforeach;


                $total = $this->cart->total() + 5;


                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.pjbank.com.br/recebimentos/eb2af021c5e2448c343965a7a80d7d090eb64164/transacoes",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_SSL_VERIFYHOST => 0,
                    CURLOPT_FOLLOWLOCATION => false,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "{
                        \"credencial\": \"eb2af021c5e2448c343965a7a80d7d090eb64164\",
                        \"vencimento\": \"03/01/2019\",
                        \"valor\": $total,
                        \"juros\": \"\",
                        \"multa\": \"\",
                        \"desconto\": \"\",
                        \"nome_cliente\": \"".$this->session->userdata('nome')."\",
                        \"cpf_cliente\": \"21984842854\",
                        \"endereco_cliente\": \"Rua Teste\",
                        \"numero_cliente\": 64,
                        \"complemento_cliente\": \"\",
                        \"bairro_cliente\": \"PJ Park\",
                        \"cidade_cliente\": \"PJ City\",
                        \"estado_cliente\": \"SP\",
                        \"cep_cliente\": 13181734,
                        \"logo_url\": \"\",
                        \"pedido_numero\": \"".$npedido."\",
                        \"texto\": \"DESAFIO PHP\",
                        \"grupo\": \"\"
                      }",
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json"
                    ),
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                    echo "cURL Error #:" . $err;
                } else {
                    $resp = json_decode($response);
                    
                }



                if ($resp->linkBoleto) {
                    $this->cart->destroy();
                    //echo 'Boleto gerado com sucesso. <a id="boleto-gerado" href="' . $resp->linkBoleto . '" target="_blank"><i class="fas fa-print"></i> Imprimir novamente.</a><br>'.$resp->linhaDigitavel;
                } else {
                    echo 'Erro ao Gerar Boleto';
                }

                $data['boleto_ok'] = 'ok';
                $data['boleto'] ='<center><h3>Pedido Nº '.$npedido.'</h3><br>Boleto gerado com sucesso. <br><a class="btn btn-success btn-lg" id="boleto-gerado" href="' . $resp->linkBoleto . '" target="_blank"><i class="fas fa-print"></i> Imprimir novamente.</a><br>'.$resp->linhaDigitavel.'</center>';
                $data['include'] = 'checkout';
                $data['nome'] =  $this->session->userdata('nome');
            } else {
                //$data['include'] = 'login';
                redirect(base_url() . 'login/');
            }


             $this->load->view('loja', $data);
        }
        else
        {
            redirect(base_url() . 'login/');
        }
    }

    public function login()
    {

        $logado = $this->session->userdata('logado');

        if ($logado == true) {
            //$data['include'] = 'minha_conta';
            redirect(base_url() . 'minha-conta/');
        } else {
            $data['include'] = 'login';
        }

        $this->load->view('loja', $data);
    }

    public function novo_cliente()
    {
        //Pega dados do Formulário
        $nome = $this->input->post("nome");
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");


        $dados = array(
            'cliente_nome' => $nome,
            'cliente_email' => $email,
            'cliente_senha' => md5($senha)
        );


        $novo = $this->loja_model->NovoCliente($dados);

        if (!$novo) {
            //Erro na Edição
            $this->session->set_flashdata('erro', '<b><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Erro na Inserção.</b>');
        } else {
            //Sucesso
            $this->session->set_flashdata('sucesso', '<i class="fa fa-check " aria-hidden="true"></i><b> ' . strtoupper($this->input->post('nome')) . '</b> inserido com sucesso.');

            $novasessao = array(
                'nome'  => $nome,
                'email'     => $email,
                'logado' => TRUE
            );

            $this->session->set_userdata($novasessao);
        }

        redirect(base_url() . 'minha-conta/');
    }

    public function logout()
    {
        $this->session->unset_userdata('logado');
        redirect(base_url());
    }

    public function logar()
    {
        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));



        $usuario = $this->loja_model->valida_login($email, $senha);

        //print_r($usuario->cliente_nome);


        if ($usuario) {
            foreach ($usuario as $linha) {
                $novasessao = array(
                    'nome'  => $linha->cliente_nome,
                    'email'     => $email,
                    'logado' => TRUE
                );
            };

            $this->session->set_userdata($novasessao);
            redirect(base_url() . 'minha-conta/');
        } else {

            redirect(base_url() . 'login/');
        }
    }

    function gerar_pdf($npedido){



$numero = $npedido;


        $pedido = $this->loja_model->pega_pedido($npedido);
        $detalhes = $this->loja_model->detalhe_pedido($npedido);


        $data['pedido'] = $pedido;
        $data['detalhes'] = $detalhes;
        $data['nome'] = $this->session->userdata('nome');


        $this->pdf->load_view('pedido_pdf',$data);
        $this->pdf->render();
        $this->pdf->stream($numero.".pdf");
    }

    
}
