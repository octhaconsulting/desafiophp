<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mb-5">

            <h3>Carrinho de Compras</h3>
            <table class="table table-striped table-condesed small">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
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
                                <th class="text-center text-danger">
                                    <form action="<?= base_url('carrinho/del_item/' . $items['rowid']) ?>" method="post" id="form_remove" role="form" />
                                    <input type="hidden" name="rowid" value="<?= $items['rowid']; ?>" />
                                    <!--input type="number" name="qty" id="qty_<?= $items['rowid']; ?>" value=" <?= $items['qty']; ?>"/-->
                                    <input type="hidden" name="segmento" value="<?= $this->uri->uri_string; ?>" />
                                    <button class="btn btn-danger btn-sm" type="button" onclick="del_item_cart('<?= $items['rowid'] ?>');" />
                                    <i class="fas fa-minus-circle"></i>
                                    </button>
                                    </form>
                                </th>
                                <td class="text-center">
                                    <a onclick="atualiza('<?= $items['rowid'] ?>','<?= $items['qty']; ?>', 'mais');"><i class="fa fa-plus-circle"></i></a>
                                    <?= $items['qty']; ?>
                                    <a onclick="atualiza('<?= $items['rowid'] ?>','<?= $items['qty']; ?>', 'menos');"><i class="fa fa-minus-circle"></i></a>
                                </td>
                                <td><?php echo $items['name']; ?></td>
                                <td class="text-right">R$ <?php echo number_format($items['price'], 2, ',', ' '); ?></td>
                                <td class="text-right">R$ <?php echo number_format($items['subtotal'], 2, ',', ' '); ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                        <!-- valor do frete -->
                        <tr>
                            <th colspan="4" class="text-right">Frete</th>
                            <th class="text-right">R$ 5,00</th>
                        </tr>
                        <!-- total do carrinho -->
                        <tr>
                            <th>
                                <button class="btn btn-danger btn-sm" onclick="destroy_cart();"><i class="fa fa-trash"></i></button>
                            </th>
                            <th>Total de <?= $this->cart->total_items() ?> Item(s) adicionados</th>
                            <th colspan="2" class="text-right">Total</th>
                            <th class="text-right h4">R$ <?php echo number_format($this->cart->total() + 5, 2, ',', ' '); ?></th>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-left">
                                <a href="<?= base_url('/') ?>" class="btn btn-primary" alt="Continuar" /><i class="fas fa-home"></i> Continuar Comprando</a>
                            </td>
                            <td colspan="3" class="text-right">
                                <a href="<?= base_url('checkout') ?>" class="btn btn-success" alt="Checkout" /><i class="fas fa-check-circle"></i> Finalizar Compra</a>
                            </td>
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
        </div>
    </div>
</div>