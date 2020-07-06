<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $barber
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Barber'), ['action' => 'edit', $barber->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Barber'), ['action' => 'delete', $barber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barber->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Barbers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barber'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Barber Schedules'), ['controller' => 'BarberSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barber Schedule'), ['controller' => 'BarberSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Barber Services'), ['controller' => 'BarberServices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barber Service'), ['controller' => 'BarberServices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="barbers view large-9 medium-8 columns content">
    <h3><?= h($barber->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uuid') ?></th>
            <td><?= h($barber->uuid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Establishment') ?></th>
            <td><?= $barber->has('establishment') ? $this->Html->link($barber->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $barber->establishment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($barber->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($barber->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($barber->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($barber->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Available') ?></th>
            <td><?= $barber->available ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $barber->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agendas') ?></h4>
        <?php if (!empty($barber->agendas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uuid') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Establishment Id') ?></th>
                <th scope="col"><?= __('Barber Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Service Date') ?></th>
                <th scope="col"><?= __('Service Start') ?></th>
                <th scope="col"><?= __('Service End') ?></th>
                <th scope="col"><?= __('Obs') ?></th>
                <th scope="col"><?= __('Executed') ?></th>
                <th scope="col"><?= __('Canceled') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($barber->agendas as $agendas): ?>
            <tr>
                <td><?= h($agendas->id) ?></td>
                <td><?= h($agendas->uuid) ?></td>
                <td><?= h($agendas->user_id) ?></td>
                <td><?= h($agendas->establishment_id) ?></td>
                <td><?= h($agendas->barber_id) ?></td>
                <td><?= h($agendas->service_id) ?></td>
                <td><?= h($agendas->service_date) ?></td>
                <td><?= h($agendas->service_start) ?></td>
                <td><?= h($agendas->service_end) ?></td>
                <td><?= h($agendas->obs) ?></td>
                <td><?= h($agendas->executed) ?></td>
                <td><?= h($agendas->canceled) ?></td>
                <td><?= h($agendas->created) ?></td>
                <td><?= h($agendas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendas', 'action' => 'view', $agendas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendas', 'action' => 'edit', $agendas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendas', 'action' => 'delete', $agendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Barber Schedules') ?></h4>
        <?php if (!empty($barber->barber_schedules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uuid') ?></th>
                <th scope="col"><?= __('Barber Id') ?></th>
                <th scope="col"><?= __('Sunday') ?></th>
                <th scope="col"><?= __('Sunday Start') ?></th>
                <th scope="col"><?= __('Sunday End') ?></th>
                <th scope="col"><?= __('Sunday Pause Start') ?></th>
                <th scope="col"><?= __('Sunday Pause End') ?></th>
                <th scope="col"><?= __('Monday') ?></th>
                <th scope="col"><?= __('Monday Start') ?></th>
                <th scope="col"><?= __('Monday End') ?></th>
                <th scope="col"><?= __('Monday Pause Start') ?></th>
                <th scope="col"><?= __('Monday Pause End') ?></th>
                <th scope="col"><?= __('Tuesday') ?></th>
                <th scope="col"><?= __('Tuesday Start') ?></th>
                <th scope="col"><?= __('Tuesday End') ?></th>
                <th scope="col"><?= __('Tuesday Pause Start') ?></th>
                <th scope="col"><?= __('Tuesday Pause End') ?></th>
                <th scope="col"><?= __('Wednesday') ?></th>
                <th scope="col"><?= __('Wednesday Start') ?></th>
                <th scope="col"><?= __('Wednesday End') ?></th>
                <th scope="col"><?= __('Wednesday Pause Start') ?></th>
                <th scope="col"><?= __('Wednesday Pause End') ?></th>
                <th scope="col"><?= __('Thursday') ?></th>
                <th scope="col"><?= __('Thursday Start') ?></th>
                <th scope="col"><?= __('Thursday End') ?></th>
                <th scope="col"><?= __('Thursday Pause Start') ?></th>
                <th scope="col"><?= __('Thursday Pause End') ?></th>
                <th scope="col"><?= __('Friday') ?></th>
                <th scope="col"><?= __('Friday Start') ?></th>
                <th scope="col"><?= __('Friday End') ?></th>
                <th scope="col"><?= __('Friday Pause Start') ?></th>
                <th scope="col"><?= __('Friday Pause End') ?></th>
                <th scope="col"><?= __('Saturday') ?></th>
                <th scope="col"><?= __('Saturday Start') ?></th>
                <th scope="col"><?= __('Saturday End') ?></th>
                <th scope="col"><?= __('Saturday Pause Start') ?></th>
                <th scope="col"><?= __('Saturday Pause End') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($barber->barber_schedules as $barberSchedules): ?>
            <tr>
                <td><?= h($barberSchedules->id) ?></td>
                <td><?= h($barberSchedules->uuid) ?></td>
                <td><?= h($barberSchedules->barber_id) ?></td>
                <td><?= h($barberSchedules->sunday) ?></td>
                <td><?= h($barberSchedules->sunday_start) ?></td>
                <td><?= h($barberSchedules->sunday_end) ?></td>
                <td><?= h($barberSchedules->sunday_pause_start) ?></td>
                <td><?= h($barberSchedules->sunday_pause_end) ?></td>
                <td><?= h($barberSchedules->monday) ?></td>
                <td><?= h($barberSchedules->monday_start) ?></td>
                <td><?= h($barberSchedules->monday_end) ?></td>
                <td><?= h($barberSchedules->monday_pause_start) ?></td>
                <td><?= h($barberSchedules->monday_pause_end) ?></td>
                <td><?= h($barberSchedules->tuesday) ?></td>
                <td><?= h($barberSchedules->tuesday_start) ?></td>
                <td><?= h($barberSchedules->tuesday_end) ?></td>
                <td><?= h($barberSchedules->tuesday_pause_start) ?></td>
                <td><?= h($barberSchedules->tuesday_pause_end) ?></td>
                <td><?= h($barberSchedules->wednesday) ?></td>
                <td><?= h($barberSchedules->wednesday_start) ?></td>
                <td><?= h($barberSchedules->wednesday_end) ?></td>
                <td><?= h($barberSchedules->wednesday_pause_start) ?></td>
                <td><?= h($barberSchedules->wednesday_pause_end) ?></td>
                <td><?= h($barberSchedules->thursday) ?></td>
                <td><?= h($barberSchedules->thursday_start) ?></td>
                <td><?= h($barberSchedules->thursday_end) ?></td>
                <td><?= h($barberSchedules->thursday_pause_start) ?></td>
                <td><?= h($barberSchedules->thursday_pause_end) ?></td>
                <td><?= h($barberSchedules->friday) ?></td>
                <td><?= h($barberSchedules->friday_start) ?></td>
                <td><?= h($barberSchedules->friday_end) ?></td>
                <td><?= h($barberSchedules->friday_pause_start) ?></td>
                <td><?= h($barberSchedules->friday_pause_end) ?></td>
                <td><?= h($barberSchedules->saturday) ?></td>
                <td><?= h($barberSchedules->saturday_start) ?></td>
                <td><?= h($barberSchedules->saturday_end) ?></td>
                <td><?= h($barberSchedules->saturday_pause_start) ?></td>
                <td><?= h($barberSchedules->saturday_pause_end) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BarberSchedules', 'action' => 'view', $barberSchedules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BarberSchedules', 'action' => 'edit', $barberSchedules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BarberSchedules', 'action' => 'delete', $barberSchedules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barberSchedules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Barber Services') ?></h4>
        <?php if (!empty($barber->barber_services)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uuid') ?></th>
                <th scope="col"><?= __('Barber Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Enabled') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($barber->barber_services as $barberServices): ?>
            <tr>
                <td><?= h($barberServices->id) ?></td>
                <td><?= h($barberServices->uuid) ?></td>
                <td><?= h($barberServices->barber_id) ?></td>
                <td><?= h($barberServices->service_id) ?></td>
                <td><?= h($barberServices->enabled) ?></td>
                <td><?= h($barberServices->created) ?></td>
                <td><?= h($barberServices->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BarberServices', 'action' => 'view', $barberServices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BarberServices', 'action' => 'edit', $barberServices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BarberServices', 'action' => 'delete', $barberServices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barberServices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
