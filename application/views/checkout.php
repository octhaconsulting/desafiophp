<div class="container">
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
    <div class="row">
        <?php

        if ($boleto_ok) {

            echo '<div class="col-md-12 mb-5 text-center"><br>' . $boleto.'</div>';
            
        } else {
            ?>
            <div class="col-md-6 mb-5">
                <h3 class="mt-3 mb-3">Revisão do Pedido</h3>
                <table class="table table-striped table-condesed small">
                    <thead>
                        <tr>

                            <th class="text-center">Qtd</th>
                            <th>Produto</th>
                            <th class="text-right">Preço</th>
                            <th class="text-right">Subtotal</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- itens do carrinho -->
                        <?php $i = 1;

                            if ($i >= 1) {
                                ?>

                            <?php foreach ($this->cart->contents() as $items) : ?>
                                <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                                <tr>

                                    <td class="text-center">

                                        <?= $items['qty']; ?>

                                    </td>
                                    <td><?php echo $items['name']; ?></td>
                                    <td class="text-right">R$ <?php echo number_format($items['price'], 2, ',', ' '); ?></td>
                                    <td class="text-right">R$ <?php echo number_format($items['subtotal'], 2, ',', ' '); ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                            <!-- valor do frete -->
                            <tr>
                                <th colspan="3" class="text-right">Frete</th>
                                <th class="text-right">R$ 5,00</th>
                            </tr>
                            <!-- total do carrinho -->
                            <tr>

                                <th>Total de <?= $this->cart->total_items() ?> Item(s) adicionados</th>
                                <th colspan="2" class="text-right">Total</th>
                                <th class="text-right h4">R$ <?php echo number_format($this->cart->total() + 5, 2, ',', ' '); ?></th>
                            </tr>

                        <?php
                            } else {
                                ?>
                            <tr>
                                <td colspan="5" class="text-center">
                                    <h4>Carrinho Vazio</h4>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="5" class="text-center">
                                    <a href="<?= base_url('/') ?>" class="btn btn-primary" alt="Continuar" /><i class="fas fa-home"></i> Continuar Comprando</a>
                                </td>

                            </tr>
                        <?php
                            }


                            ?>
                    </tbody>
                </table>
                <span class="text-muted mb-5"><small>***Confira todos os produtos do Pedido</small></span>
            </div>
            <div class="col-md-6 text-center pt-5">


                <span class="text-muted"><small>Clique no botão abaixo para finalizar o seu pedido e gerar o boleto para pagamento.</small></span>
                <a href="<?= base_url('/') ?>" class="btn btn-primary btn-lg mt-5" alt="Continuar" /><i class="fas fa-barcode"></i> Gerar Boleto</a>

            </div>

        <?php
        }
        ?>


    </div>

</div>