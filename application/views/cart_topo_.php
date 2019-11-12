<li class="nav-item dropdown">
    <a href="<?php echo base_url('carrinho') ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-shopping-cart"></i>
        Qtd. <span id="qty"><?= $this->cart->total_items() ?></span>
        <i class="fa fa-dollar"></i>
        <span id="total"><?php echo $this->cart->total(); ?></span>

        <ul class="dropdown-menu">
            <!--
            <li><a href="#">p1</a></li>
            <li><a href="#">p2</a></li>
            -->
            <li>x</li>
            <li><a href="<?php echo base_url('checkout') ?>">CHECKOUT</a></li>
        </ul>
    </a>

    <ul class="dropdown-menu" role="menu">

        <li class="text-center"><a href="#"><small><strong>Carrinho</strong></small></a></li>

        <li>
            <table class="table table-striped table-condesed">
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
                    <?php $i = 1; ?>

                    <?php foreach ($this->cart->contents() as $items): ?>
                        <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                        <tr>
                            <th class="text-center text-danger">
                    <form action="<?= base_url('carrinho/del_item/' . $items['rowid']) ?>" method="post" id="form_remove" role="form"/>
                    <input type="hidden" name="rowid" value="<?= $items['rowid']; ?>"/>
                    <input type="hidden" name="segmento" value="<?= $this->uri->uri_string; ?>"/>
                    <button class="btn btn-danger btn-xs" type="button" onclick="del_item('<?=$items['rowid']?>');" />
                    <i class="fa fa-remove"></i>
                    </button>
                    </form>
                    </th>
                    <td class="text-center"><?= $items['qty']; ?></td>
                    <td><?php echo $items['name']; ?></td>
                    <td class="text-right"><?php echo $items['price']; ?></td>
                    <td class="text-right"><?php echo $items['subtotal']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>

                <!-- valor do frete -->
                <tr>
                    <th colspan="4" class="text-right">Frete</th>
                    <th class="text-right">50.00</th>
                </tr>
                <!-- total do carrinho -->
                <tr>
                    <th>
                        <button class="btn btn-danger btn-xs" onclick="destroy_cart();"><i class="fa fa-trash"></i></button>
                    </th>
                    <th><?= $this->cart->total_items() ?></th>
                    <th colspan="2" class="text-right">Total</th>
                    <th class="text-right"><?php echo $this->cart->total(); ?></th>
                </tr>
                <tr>
                    <td colspan="5">
                        <a href="<?= base_url('checkout') ?>" class="btn btn-warning btn-block" alt="Checkout"/><i class="fa fa-check"></i> CHECKOUT</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </li>
    </ul>
</li>