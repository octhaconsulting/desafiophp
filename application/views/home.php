<div class="container">
		<div class="row mt-3 mb-3">
			<div class="col-md-12">
				<h3><small>Olá, seja bem vindo a</small> Loja Teste!</h3>
			</div>
		</div>
		<div class="row">

			<?php foreach ($produtos as $row) : ?>
				<div class="col-md-3 mb-3">
					<div class="card">
						<img class="card-img-top" src="<?= base_url() ?>assets/imgs/download.svg" alt="Imagem de capa do card">
						<div class="card-body">
							<h6 class="card-title"><?= $row->descricaoProduto; ?></h6>
							<h4 class="card-subtitle mb-2"><span class="badge badge-danger">R$ <?= $row->precoProduto; ?></span></h4>
							<form action="<?= base_url('carrinho/add_item') ?>" method="post" id="form_insert" role="form" />

							<input type="hidden" name="id_produto" id="id_produto" value="<?= $row->codigoProduto; ?>">
							<input type="hidden" name="descricao" id="descricao" value="<?= $row->descricaoProduto; ?>">
							<input type="hidden" name="quantidade" id="quantidade" size="3" value="1" />
							<input type="hidden" name="preco" id="preco" value="<?= $row->precoProduto; ?>">
							<input type="hidden" name="segmento" value="<?= $this->uri->uri_string(); ?>" />
							<button class="btn btn-success bnt-block btn-sm" type="button" id="adicionar" onclick="add_item('<?= $row->codigoProduto; ?>', '<?= $row->descricaoProduto; ?>', '1', '<?= $row->precoProduto; ?>');" /><i class="fa fa-shopping-cart"></i> Comprar Agora</button>
							</form>


						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
		<div class="row">
			<div class="col-md-12 mt-2 mb-5">
				<?php echo $pagination; ?>
			</div>
		</div>
	</div>