<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3 mb-3 ">
            <h3>Minha Conta</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data/Hora</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Status</th>
                        <th scope="col">PDF</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($pedidos as $row) : ?>
                    <tr>
                        <th scope="row"><?= $row->pedido_id?></th>
                        <td><?= date('d/m/Y H:i:s', strtotime($row->pedido_data))?></td>
                        <td>R$ <?= $row->pedido_total?></td>
                        <td><?= $row->pedido_status?></td>
                        <td><a href="<?=base_url()?>loja/gerar_pdf/<?= $row->pedido_id?>" class="btn btn-danger btn-sm">PDF</a></td>
                    </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>

        </div>
    </div>
    <div class="row">
			<div class="col-md-12 mt-2 mb-5">
				<?php echo $pagination; ?>
			</div>
		</div>

</div>