<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mb-5">
            
        <?php foreach ($pedido as $ped) : ?>
        <h1>Pedido Nº <?= $ped->pedido_id?> | Desafio PHP Superlógica</h1>
            <hr>
            Data/Hora: <?= date('d/m/Y H:i:s', strtotime($ped->pedido_data))?>
            <br>
            <br>
            Cliente: <?= $nome ?>
            <?php endforeach; ?>
            <h3>Detalhes do Pedido</h3>
            <table class="table table-sm" style="width:100%" border="1">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Qtde</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detalhes as $row) : ?>
                        <tr>
                            <th scope="row"><?= $row->produto_id?></th>
                            <td><?= $row->produto_desc?></td>
                            <td><?= $row->produto_qtde?></td>
                            <td>R$ <?= $row->produto_valor?></td>
                            <td>R$ <?= $row->produto_subtotal?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <h1>Total: R$ <?= $ped->pedido_total?></h1>
        </div>
    </div>
</div>