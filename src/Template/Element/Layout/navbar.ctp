<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-15">
    <div class="container-fluid">
        <div class="navbar-header">
            <?php echo $this->Html->link('BarberShop', ['plugin' => null, 'controller' => 'Pages', 'action' => 'home'], ['class' => 'navbar-brand']); ?>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="weight-500 mr-15">Rua Duque de Caxias, 386 - São Manuel/SP</li>

            <li class="weight-300 mr-15">
                &bull;&nbsp;
                <?php if (!empty($this->Session->read('Auth.User.id'))) : ?>
                    <?= 'Bem vindo(a), <span>' . $this->Session->read('Auth.User.name') . '</span>'; ?>
                <?php else : ?>
                    <?php echo $this->Html->link('ENTRAR', ['controller' => 'Pages', 'action' => 'login']); ?>
                <?php endif;  ?>
            </li>
            <?php if (!empty($this->Session->read('Auth.User.id'))) : ?>
                <li class="weight-300 mr-15">
                    &bull;&nbsp;
                    <?php echo $this->Html->link('AGENDA', ['controller' => 'Pages', 'action' => 'agenda', 'uuid' => $this->Session->read('Auth.User.uuid')]); ?>
                </li>
                <li class="weight-300 mr-15">
                    &bull;&nbsp;
                    <?php echo $this->Html->link('SAIR', ['controller' => 'Pages', 'action' => 'logout']); ?>
                </li>
            <?php else : ?>
                <li class="weight-300 mr-15">
                    &bull;&nbsp;
                    <?php echo $this->Html->link('CADASTRAR', ['controller' => 'Pages', 'action' => 'register']); ?>
                </li>
            <?php endif;  ?>

        </ul>
    </div>
</nav>
