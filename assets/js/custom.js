/* custom.js */

//Adiciona Item ao Carrinho.
function add_item(id, desc, qtde, preco) {
    let timerInterval
    Swal.fire({
        title: desc+' sendo adicionado ao carrinho!',
        timer: 4000,
        onBeforeOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
                Swal.getContent().querySelector('b')
                    .textContent = Swal.getTimerLeft()
            }, 100)
        },
        onClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.timer
        ) {
            console.log('I was closed by the timer')
        }
    })

    var p_id = id;
    var p_desc = desc;
    var p_qtde = qtde;
    var p_preco = preco;

    // alert(p_desc);

    $.post("/index.php/carrinho/add_item", { id_produto: p_id, descricao: p_desc, quantidade: p_qtde, preco: p_preco })
        .done(function (data) {
            
            Swal.fire({
               
                icon: 'success',
                title: p_desc + ' adicionado com Sucesso!',
                showConfirmButton: false,
                timer: 1500
              })

            $('#dv_cart').load('/carrinho/view_cart');
            $('#dv_cart_topo').load('/carrinho/view_cart_topo');

        });
}

function atualiza(rowid, qtde_atual, tipo) {
    if (tipo == 'mais') {
        var qtde = parseInt(qtde_atual) + parseInt(1);
        update_item(rowid, qtde);
    }
    else {

        var qtde = parseInt(qtde_atual) - parseInt(1);
        if (qtde > 0) {
            update_item(rowid, qtde);
        }
        else {
            del_item(rowid);
        }
    }

}
function update_item(rowid, qtde) {
    var p_id = rowid;

    var p_qtde = qtde;


    // alert(p_desc);
    $('#dv_cart_topo').html('<span style="color:#fff;"><i class="fas fa-sync-alt"></i>&nbsp;<span>Atualizando Item...</span></span>');

    $.post("/index.php/carrinho/update_item", { rowid: p_id, qty: p_qtde })
        .done(function (data) {
            Swal.fire({
               
                icon: 'success',
                title: ' Item Atualizado com Sucesso!',
                showConfirmButton: false,
                timer: 1500
              })

              location.reload();
              $('#dv_cart').load('/carrinho/view_cart');
              $('#dv_cart_topo').load('/carrinho/view_cart_topo');

        });
}

//Exclui o Item do Carrinho
function del_item(rowid) {
    var r = confirm("Deseja excluir este item do Carrinho?");
    if (r == true) {
        $('#dv_cart_topo').html('<span style="color:#fff;"><i class="fas fa-sync-alt"></i>&nbsp;<span>Apagando Item...</span></span>');
        $.get("/index.php/carrinho/del_item/" + rowid, function (data) {
            Swal.fire({
               
                icon: 'success',
                title: ' Item Excluído com Sucesso!',
                showConfirmButton: false,
                timer: 1500
              })

            $('#dv_cart').load('/index.php/carrinho/view_cart');
            $('#dv_cart_topo').load('/index.php/carrinho/view_cart_topo');
        });
    }

}

function del_item_cart(rowid) {
    var r = confirm("Deseja excluir este item do Carrinho?");
    if (r == true) {
        $('#dv_cart_topo').html('<span style="color:#fff;"><i class="fas fa-sync-alt"></i>&nbsp;<span>Apagando Item...</span></span>');
        $.get("/index.php/carrinho/del_item/" + rowid, function (data) {
            Swal.fire({
               
                icon: 'success',
                title: ' Item Excluído com Sucesso!',
                showConfirmButton: false,
                timer: 1500
              })
              location.reload();
            $('#dv_cart').load('/index.php/carrinho/view_cart');
            $('#dv_cart_topo').load('/index.php/carrinho/view_cart_topo');
        });
    }

}

//Limpa o Carrinho
function destroy_cart() {

    Swal.fire({
        title: 'Esvaziar Carrinho?',
        text: "Deseja esvaziar seu carrinho de compras?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, esvazie',
        cancelButtonText: 'Não, Continuar Comprando'
      }).then((result) => {
        if (result.value) {
            $('#dv_cart_topo').html('<span style="color:#fff;"><i class="fas fa-sync-alt"></i>&nbsp;<span>Limpando Carrinho...</span></span>');
            $.get("/index.php/carrinho/del_cart/", function (data) {
                
                $('#dv_cart').load('/index.php/carrinho/view_cart');
                $('#dv_cart_topo').load('/index.php/carrinho/view_cart_topo');
            });
            Swal.fire({
                   
                icon: 'success',
                title: ' Carrinho esvaziado com Sucesso!',
                showConfirmButton: false,
                timer: 1500
              })
        }
      })
    
}