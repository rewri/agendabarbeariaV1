<h3 class="mb-30 text-success">&bull; Serviços disponíveis:</h3>
<?php if (!empty($establishment['establishment_services'])) : ?>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-condensed">
            <thead>
                <tr class="">
                    <th scope="col" style="width: 33%">Serviço</th>
                    <th scope="col" style="width: 33%">Tempo</th>
                    <th scope="col" style="width: 33%">Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($establishment['establishment_services'] as $service) : ?>
                    <tr scope="row">
                        <td><?= $service['service']['name']; ?></td>
                        <td><?= $service['service']['duration_in_minutes'] . ' min'; ?></td>
                        <td><?= $this->Number->currency($service['price'], 'BRL'); ?></td>
                    <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
