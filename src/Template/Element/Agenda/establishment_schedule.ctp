<?php if (!empty($establishment['establishment_schedules'])) : ?>
    <h3 class="mb-30 text-success">&bull; Horários de funcionamento:</h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-condensed">
            <thead>
                <tr class="">
                    <th scope="col" style="width: 20%">Dia</th>
                    <th scope="col" style="width: 20%">Abre?</th>
                    <th scope="col" style="width: 20%">Abre</th>
                    <th scope="col" style="width: 20%">Fecha</th>
                    <th scope="col" style="width: 20%">Almoço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($establishment['establishment_schedules'] as $weekday) : ?>
                    <?php $active = date('N') == $weekday['weekday'] ? 'table-active' : null; ?>
                    <tr class="<?= $active; ?>" scope="row">
                        <td><?= $weeknames[$weekday['weekday']]; ?></td>
                        <td><?= $weekday['open'] ? "<span class='text-success'>Sim</span>" : "<span class='text-danger'>Não</span>"; ?></td>
                        <td><?= !empty($weekday['start_time']) ? $this->Time->format($weekday['start_time'], 'H:mm') . 'h' : '--'; ?></td>
                        <td><?= !empty($weekday['end_time']) ? $this->Time->format($weekday['end_time'], 'H:mm') . 'h' : '--'; ?></td>
                        <td>
                            <?php if (!empty($weekday['lunch_time']) && !empty($weekday['lunch_length'])) : ?>
                                <?php
                                $lunchStart = new DateTime($weekday['lunch_time']);
                                $lunchEnd = strtotime("{$weekday['lunch_time']} +{$weekday['lunch_length']} minute");
                                echo $this->Time->format($weekday['lunch_time'], 'H:mm') . 'h às ' . date('H:i', $lunchEnd) . 'h';
                                ?>
                            <?php else : ?>
                                --
                            <?php endif; ?>
                        </td>
                    <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
