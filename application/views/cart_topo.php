<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#fff;">
        <i class="fa fa-shopping-cart"></i>
        <b><span id="qty"><?= $this->cart->total_items() ?> Item(s)</span>
        |
        <span id="total">R$ <?php echo number_format($this->cart->total(), 2, ',', ' '); ?></span></b>
        <span class="caret"></span></a>
    <ul class="dropdown-menu dropdown-cart" role="menu">
        <?php $i = 1; ?>

        <?php foreach ($this->cart->contents() as $items) : ?>
            <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
            <li>
                <span class="item">
                    <small><span class="item-left">

                            <span class="item-info">
                                <span><?= $items['qty']; ?>x - <?php echo $items['name']; ?></span>
                                <span>R$ <?php echo number_format($items['price'], 2, ',', ' '); ?> </span>
                                <span>SubTotal: R$ <?php echo number_format($items['subtotal'], 2, ',', ' '); ?></span>
                            </span>
                        </span>
                        <span class="item-right">
                            <form action="<?= base_url('carrinho/del_item/' . $items['rowid']) ?>" method="post" id="form_remove" role="form" />
                            <input type="hidden" name="rowid" value="<?= $items['rowid']; ?>" />
                            <input type="hidden" name="segmento" value="<?= $this->uri->uri_string; ?>" />
                            <button class="btn btn-danger btn-sm" type="button" onclick="del_item('<?= $items['rowid'] ?>');">
                            <i class="fas fa-trash-alt"></i>
                            </button>
                            </form>
                        </span>
                    </small>
                </span>
            </li>
            <?php $i++; ?>
        <?php endforeach; ?>


       
        <?php
        
            if($i>1)
            {
        ?>
         <li class="dropdown-divider"></li>
        <li class="pl-2 pr-2"><button class="btn btn-danger btn-sm btn-block mb-2 " onclick="destroy_cart();"><i class="fas fa-trash-alt"></i> Limpar Carrinho</button></li>
        <li class="pl-2 pr-2"><a class="btn-success btn-block btn-sm text-center mb-2 " href="<?=base_url()?>carrinho">Finalizar Compra</a></li>
        <?php
            }
            else
            {
            ?>
                <li class="text-center pt-3 pb-3 text-muted"><h6><i class="far fa-frown-open"></i> Carrinho Vazio</h6></li>
            <?php
            }

            ?>
    </ul>
</li>