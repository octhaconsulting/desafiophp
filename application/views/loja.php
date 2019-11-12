<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="assets/imgs/simbolo.svg">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<style>
		ul.dropdown-cart {
			min-width: 250px;
			border: 2px solid #343434;
			padding: 2px;
			margin: 7px;
			margin-top: 11px;
		}

		ul.dropdown-cart li .item {
			display: block;
			padding: 3px 10px;
			margin: 3px 0;

		}

		ul.dropdown-cart li .item:hover {
			background-color: #c3c5c5;

		}

		ul.dropdown-cart li .item:after {
			visibility: hidden;
			display: block;
			font-size: 0;
			content: " ";
			clear: both;
			height: 0;
		}

		ul.dropdown-cart li .item-left {
			float: left;
		}

		ul.dropdown-cart li .item-left img,
		ul.dropdown-cart li .item-left span.item-info {
			float: left;
		}

		ul.dropdown-cart li .item-left span.item-info {
			margin-left: 10px;
		}

		ul.dropdown-cart li .item-left span.item-info span {
			display: block;
		}

		ul.dropdown-cart li .item-right {
			float: right;
		}

		ul.dropdown-cart li .item-right button {
			margin-top: 14px;
		}
	</style>
	<title>Superlógica | Desafio PHP</title>
</head>

<body style="background-color:#f1f1f1;">
	<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#3399FF;">
		<div class="container">
			<a class="navbar-brand mr-5" href="#"><img src="<?= base_url() ?>assets/imgs/logo-superlogica.svg"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url() ?>">Início <span class="sr-only">(página atual)</span></a>
					</li>



				</ul>

				<ul class="navbar-nav mr-sm-2 menuitem" id="dv_cart_topo">
					<!--li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
					</!--li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Meus Pedidos</a>
					</li>
					<li-- class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-shopping-basket"></i> R$ 50,00
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Ação</a>
							<a class="dropdown-item" href="#">Outra ação</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Algo mais aqui</a>
						</div>
					</li-->



				</ul>

			</div>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">E-Commerce Desafio de PHP</a>

			<div class="pull-right">
				 Olá, <strong><?= (isset($nome)? $nome : 'Visitante'); ?> </strong>! <a href="<?=base_url()?>minha-conta">Minha Conta</a> <?= (!isset($nome)? '| <a href="'.base_url().'minha-conta">Cadastre-se</a>':' | <a href="'.base_url().'minha-conta/sair">Sair</a>')?>
			</div>
		</div>
	</nav>
	<?php $this->load->view($include); ?>
	
	<div class="container-fluid bg-dark">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-md-3 ">
					<img src="<?= base_url() ?>assets/imgs/logo-superlogica.svg">
				</div>
				<div class="col-md-9 pt-3">
					<small><span class="text-muted">Desenvolvido por Carlos Alexandre das Dores ® <?= date('Y') ?></span></small>
				</div>
			</div>
		</div>
	</div>
	<!-- JavaScript (Opcional) -->
	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<!--script-- src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></!--script-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="<?= base_url() ?>assets/js/custom.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			$('#dv_cart_topo').html('<span style="color:#fff;"><i class="fas fa-sync-alt"></i>&nbsp;<span>Carregando Carrinho...</span></span>');
			$('#dv_cart').load('<?= base_url() ?>carrinho/view_cart');
			$('#dv_cart_topo').load('<?= base_url() ?>carrinho/view_cart_topo');

		});
	</script>
</body>

</html>