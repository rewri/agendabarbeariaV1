<h3 class="mb-30 text-success">&bull; Meus agendamentos:</h3>
<?php if (!empty($agenda)) : ?>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-condensed">
            <thead>
                <tr class="">
                    <th scope="col" style="width: 15%">Dia</th>
                    <th scope="col" style="width: 15%">Horário</th>
                    <th scope="col" style="width: 20%">Tipo</th>
                    <th scope="col" style="width: 30%">Barbeiro</th>
                    <th scope="col" style="width: 10%">Realizado?</th>
                    <th scope="col" style="width: 10%"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($agenda as $row) : ?>
                    <tr scope="row">
                        <td class="valign-middle text-warning"><?= $this->Time->format($row['service_date'], 'd/MM/Y'); ?></td>
                        <td class="valign-middle text-warning"><?= $this->Time->format($row['service_start'], 'H:mm'); ?></td>
                        <td class="valign-middle"><?= $row['service']['name']; ?></td>
                        <td class="valign-middle"><?= $row['barber']['name']; ?></td>
                        <td class="valign-middle"><?= $row['executed'] ? 'Sim' : 'Não'; ?></td>
                        <td class="text-right">
                            <?php if (!$row['executed']) : ?>
                                <button type="button" class="btn btn-sm btn-outline-danger">CANCELAR <i class="fa fa-times"></i> </button>
                            <?php endif; ?>
                        </td>
                    <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else : ?>
    <p>Nenhum agendamento.</p>
<?php endif; ?>
