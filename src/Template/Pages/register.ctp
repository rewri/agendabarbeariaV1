<?= $this->Form->create(null, ['url' => ['action' => 'register'], 'class' => 'form-register']); ?>

    <?= $this->Form->text('uuid', ['type' => 'hidden', 'id' => 'uuid']); ?>

    <div class="row m-30">
        <div class="col-md-12 col-xs-12 text-center">
            <h3>Cadastro de novo usuário</h3>
            <p class="text-danger font-14 weight-300">* todos os campos são de preenchimento obrigatório</p>
        </div>
    </div>

    <label for="name">Seu nome completo:</label>
    <?= $this->Form->text('name', ['type' => 'text', 'id' => 'name', 'class' => 'form-control', 'placeholder' => 'Nome completo', 'required' => true, 'autofocus' => true, 'label' => false]); ?>

    <label for="username">Seu email (será seu login no sistema):</label>
    <?= $this->Form->text('username', ['type' => 'email', 'id' => 'username', 'class' => 'form-control', 'placeholder' => 'Email', 'required' => true, 'label' => false]); ?>

    <label for="phone">Seu telefone:</label>
    <?= $this->Form->text('phone', ['type' => 'text', 'id' => 'phone', 'class' => 'form-control', 'placeholder' => '(14) 99999-9999', 'required' => true, 'label' => false]); ?>

    <label for="password">Sua senha:</label>
    <?= $this->Form->password('password', ['type' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Senha', 'required' => true, 'label' => false]); ?>

    <label for="password2">Sua senha novamente:</label>
    <?= $this->Form->password('password2', ['type' => 'password', 'id' => 'password2', 'class' => 'form-control', 'placeholder' => 'Senha', 'required' => true, 'label' => false]); ?>

    <?= $this->Form->submit('CADASTRAR', ['class' => 'btn btn-lg btn-success btn-block']); ?>

<?= $this->Form->end(); ?>


