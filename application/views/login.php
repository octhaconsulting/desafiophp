<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3 mb-3">
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-5">
        <h3>Já sou cadastrado</h3>
        <small >Acesse sua Conta para continuar</small>
            <form class="mt-3" method="post" action="<?=base_url()?>minha-conta/logar">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>

                <button type="submit" class="btn btn-danger">Acessar Minha Conta</button>
            </form>
        </div>
        <div class="col-md-6 mb-5">
        <h3 >Cadastre-se</h3>
        <small class="mb-3">Efetue seu cadastro para prosseguir</small>
            <form class="mt-3" method="post" action="<?=base_url()?>cadastro/novo">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome Completo</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu Nome Completo">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

</div>