<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">BarberShop</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="masthead-username">
                                <?php if (!empty($this->Session->read('Auth.User.id'))) : ?>
                                    <?= 'Bem vindo(a), <span>' . $this->Session->read('Auth.User.name') . '</span>'; ?>
                                <?php else : ?>
                                    <?php echo $this->Html->link('ENTRAR', ['controller' => 'Pages', 'action' => 'login']); ?>
                                <?php endif;  ?>
                            </li>
                            <?php if (!empty($this->Session->read('Auth.User.id'))) : ?>
                                <li>
                                    <?php echo $this->Html->link('SAIR', ['controller' => 'Pages', 'action' => 'logout']); ?>
                                </li>
                            <?php endif;  ?>
                            <li>
                                <?php echo $this->Html->link('CADASTRAR', ['controller' => 'Pages', 'action' => 'register']); ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <p class="lead">BARBEARIA</p>
                <h1 class="cover-heading">BarberShop</h1>
                <h2>Rua Duque de Caxias, 386 - São Manuel/SP</h2>
                <p class="lead">Agende seu horário online</p>
                <?php if (!empty($this->Session->read('Auth.User.id'))) : ?>
                    <p class="lead">
                        <?php echo $this->Html->link('AGENDAR HORÁRIO', ['controller' => 'Pages', 'action' => 'agenda', 'uuid' => $this->Session->read('Auth.User.uuid')], ['class' => 'btn btn-lg btn-agenda']); ?>
                    </p>
                    <p class="lead">
                        <?php echo $this->Html->link('VER MEUS AGENDAMENTOS', ['controller' => 'Pages', 'action' => 'agenda', 'uuid' => $this->Session->read('Auth.User.uuid')], ['class' => 'btn btn-lg btn-agenda']); ?>
                    </p>
                <?php else : ?>
                    <?php echo $this->Html->link('AGENDAR HORÁRIO', ['controller' => 'Pages', 'action' => 'login'], ['class' => 'btn btn-lg btn-agenda']); ?>
                <?php endif; ?>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Desenvolvido por <a href="agendabarbearia.com.br">agendabarbearia.com.br</p>
                </div>
            </div>

        </div>

    </div>

</div>
