<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">BarberShop São Manuel</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li>
                                <?php echo $this->Html->link('ENTRAR', ['controller' => 'Pages', 'action' => 'login']); ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">BarberShop</h1>
                <h2>Rua Duque de Caxias, 386 - São Manuel/SP</h2>
                <p class="lead">Agende seu horário online</p>
                <p class="lead">
                    <?php echo $this->Html->link('AGENDAR HORÁRIO', ['controller' => 'Pages', 'action' => 'login'], ['class' => 'btn btn-lg btn-agenda']); ?>
                </p>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Desenvolvido por <a href="agendabarbearia.com.br">agendabarbearia.com.br</p>
                </div>
            </div>

        </div>

    </div>

</div>
