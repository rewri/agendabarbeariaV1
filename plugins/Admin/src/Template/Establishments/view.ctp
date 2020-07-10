<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $establishment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Establishment'), ['action' => 'edit', $establishment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Establishment'), ['action' => 'delete', $establishment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Establishments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Schedules'), ['controller' => 'EstablishmentSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Schedule'), ['controller' => 'EstablishmentSchedules', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="establishments view large-9 medium-8 columns content">
    <h3><?= h($establishment->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uuid') ?></th>
            <td><?= h($establishment->uuid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($establishment->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($establishment->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($establishment->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($establishment->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($establishment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($establishment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($establishment->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $establishment->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($establishment->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Agendas') ?></h4>
        <?php if (!empty($establishment->agendas)): ?>
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
            <?php foreach ($establishment->agendas as $agendas): ?>
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
        <h4><?= __('Related Barbers') ?></h4>
        <?php if (!empty($establishment->barbers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uuid') ?></th>
                <th scope="col"><?= __('Establishment Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Available') ?></th>
                <th scope="col"><?= __('Enabled') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($establishment->barbers as $barbers): ?>
            <tr>
                <td><?= h($barbers->id) ?></td>
                <td><?= h($barbers->uuid) ?></td>
                <td><?= h($barbers->establishment_id) ?></td>
                <td><?= h($barbers->name) ?></td>
                <td><?= h($barbers->available) ?></td>
                <td><?= h($barbers->enabled) ?></td>
                <td><?= h($barbers->created) ?></td>
                <td><?= h($barbers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Barbers', 'action' => 'view', $barbers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Barbers', 'action' => 'edit', $barbers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Barbers', 'action' => 'delete', $barbers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barbers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Establishment Schedules') ?></h4>
        <?php if (!empty($establishment->establishment_schedules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uuid') ?></th>
                <th scope="col"><?= __('Establishment Id') ?></th>
                <th scope="col"><?= __('Weekday') ?></th>
                <th scope="col"><?= __('Open') ?></th>
                <th scope="col"><?= __('Start Time') ?></th>
                <th scope="col"><?= __('End Time') ?></th>
                <th scope="col"><?= __('Lunch Time') ?></th>
                <th scope="col"><?= __('Lunch Length') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($establishment->establishment_schedules as $establishmentSchedules): ?>
            <tr>
                <td><?= h($establishmentSchedules->id) ?></td>
                <td><?= h($establishmentSchedules->uuid) ?></td>
                <td><?= h($establishmentSchedules->establishment_id) ?></td>
                <td><?= h($establishmentSchedules->weekday) ?></td>
                <td><?= h($establishmentSchedules->open) ?></td>
                <td><?= h($establishmentSchedules->start_time) ?></td>
                <td><?= h($establishmentSchedules->end_time) ?></td>
                <td><?= h($establishmentSchedules->lunch_time) ?></td>
                <td><?= h($establishmentSchedules->lunch_length) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EstablishmentSchedules', 'action' => 'view', $establishmentSchedules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EstablishmentSchedules', 'action' => 'edit', $establishmentSchedules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EstablishmentSchedules', 'action' => 'delete', $establishmentSchedules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentSchedules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
