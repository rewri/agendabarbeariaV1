<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand"><?= $establishment['name']; ?></h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="masthead-username">
                                <?php if (!empty($this->Session->read('Auth.User.id'))) : ?>
                                    <?= 'Bem vindo(a), <span>' . $this->Session->read('Auth.User.name') . '</span>'; ?>
                                    <small><?php echo $this->Html->link('[sair]', ['controller' => 'Pages', 'action' => 'logout']); ?></small>
                                <?php else : ?>
                                    <?php echo $this->Html->link('ENTRAR', ['controller' => 'Pages', 'action' => 'login']); ?>
                                <?php endif;  ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('CADASTRAR', ['controller' => 'Pages', 'action' => 'register']); ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="inner cover">
                <p class="lead">BARBEARIA</p>
                <h1 class="cover-heading"><?= $establishment['name']; ?></h1>
                <?php if ($establishment['address']) : ?>
                    <h2>
                        <?= $establishment['address']; ?>
                        <?= !empty($establishment['city']) ? " - {$establishment['city']}" : null; ?>
                    </h2>
                <?php endif; ?>
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
