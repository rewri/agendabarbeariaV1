

<form class="form-signin">

    <div class="row m-30">
        <div class="col-md-12 col-xs-12 text-center">
            <p>Para agendar seu horário é necessário estar logado no sistema.</p>
        </div>

    </div>

    <label for="inputEmail" class="sr-only">Seu email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>

    <label for="inputPassword" class="sr-only">Sua senha</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Sua senha" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR</button>

    <div class="row mt-30">
        <div class="col-md-12 col-xs-12">
            <p>Não tem usuário cadastrado? Não tem problema.<br/>
            <?php echo $this->Html->link('Clique aqui para fazer seu cadastro', ['controller' => 'Pages', 'action' => 'register']); ?>. Ou então:</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xs-12">
            <button class="btn btn-lg btn-primary btn-block" type="button"><i class="fa fa-facebook-official"></i><br>CADASTRAR COM FACEBOOK</button>
        </div>
        <div class="col-md-6 col-xs-12">
            <button class="btn btn-lg btn-danger btn-block" type="button"><i class="fa fa-google" aria-hidden="true"></i><br>CADASTRAR COM GOOGLE </button>
        </div>
    </div>


</form>
