<?= $this->Form->create(null, ['class' => 'form-signin']); ?>
    <div class="row m-30">
        <div class="col-md-12 col-xs-12 text-center">
            <h3>Para agendar seu horário é necessário estar logado no sistema</h3>
        </div>
    </div>
    <label for="username" class="sr-only">Seu email</label>
    <?= $this->Form->text('username', ['type' => 'email', 'id' => 'username', 'class' => 'form-control', 'placeholder' => 'Seu email', 'required' => true, 'autofocus' => true, 'label' => false]); ?>
    <label for="inputPassword" class="sr-only">Sua senha</label>
    <?= $this->Form->password('password', ['type' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Sua senha', 'required' => true, 'label' => false]); ?>
    <?= $this->Form->submit('ENTRAR', ['class' => 'btn btn-lg btn-success btn-block']); ?>
    <?= $this->Html->link('Esqueci minha senha', ['controller' => 'Pages', 'action' => 'remember'], ['class' => 'font-18 weight-500']) ?>
    <div class="row mt-30">
        <div class="col-md-12 col-xs-12 mt-15">
            <p>Não tem usuário cadastrado? Não tem problema!</p>
            <p><?php echo $this->Html->link('CADASTRE-SE AQUI', ['controller' => 'Pages', 'action' => 'register'], ['class' => 'btn btn-block btn-lg btn-outline-info']); ?></p>
            <p class="hidden">Ou então:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12 hidden">
            <?= $this->Html->link('<i class="fa fa-facebook-official"></i><br>CADASTRAR COM FACEBOOK', ['controller' => 'Pages', 'action' => 'register-facebook'], ['class' => 'btn btn-lg btn-primary btn-block mb-10', 'escape' => false]) ?>
        </div>
        <div class="col-md-6 col-xs-12 hidden">
            <?= $this->Html->link('<i class="fa fa-google"></i><br>CADASTRAR COM GOOGLE', ['controller' => 'Pages', 'action' => 'register-google'], ['class' => 'btn btn-lg btn-danger btn-block mb-10', 'escape' => false]) ?>
        </div>
    </div>
<?= $this->Form->end(); ?>
