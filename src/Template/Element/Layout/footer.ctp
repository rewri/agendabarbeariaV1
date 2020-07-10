<?php
    $data = [
        'name' => $establishment['name'],
        'address' => !empty($establishment['address']) ? " &bull; {$establishment['address']}" : null,
        'city' => !empty($establishment['city']) ? " - {$establishment['city']}" : null,
        'phone' => !empty($establishment['phone']) ? " &bull; {$establishment['phone']}" : null,
    ];
?>
<?php if (!$isMobile) : ?>
    <footer class="footer">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-md-6 col-xs-12 text-left">
                    <p class="text-muted">
                        <?= $data['name']; ?><?= $data['address']; ?><?= $data['city']; ?><?= $data['phone']; ?>
                    </p>
                </div>
                <div class="col-md-6 col-xs-12 text-right">
                    <p class="text-muted">
                        Desenvolvido por <a href="agendabarbearia.com.br">agendabarbearia.com.br</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
<?php else : ?>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <p class="text-muted">
                        &bull; <?= $data['name']; ?>
                    </p>
                    <p class="text-muted">
                        <?= $data['address']; ?><?= $data['city']; ?>
                    </p>
                    <p class="text-muted">
                        <?= $data['phone']; ?>
                    </p>
                    <p class="text-muted">
                        Desenvolvido por <a href="agendabarbearia.com.br">agendabarbearia.com.br</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>
