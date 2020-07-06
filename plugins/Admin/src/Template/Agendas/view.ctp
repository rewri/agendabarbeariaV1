<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $agenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agenda'), ['action' => 'edit', $agenda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agenda'), ['action' => 'delete', $agenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agenda'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agendas view large-9 medium-8 columns content">
    <h3><?= h($agenda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uuid') ?></th>
            <td><?= h($agenda->uuid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $agenda->has('user') ? $this->Html->link($agenda->user->name, ['controller' => 'Users', 'action' => 'view', $agenda->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Establishment') ?></th>
            <td><?= $agenda->has('establishment') ? $this->Html->link($agenda->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $agenda->establishment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Barber') ?></th>
            <td><?= $agenda->has('barber') ? $this->Html->link($agenda->barber->name, ['controller' => 'Barbers', 'action' => 'view', $agenda->barber->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $agenda->has('service') ? $this->Html->link($agenda->service->name, ['controller' => 'Services', 'action' => 'view', $agenda->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($agenda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service Date') ?></th>
            <td><?= h($agenda->service_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service Start') ?></th>
            <td><?= h($agenda->service_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service End') ?></th>
            <td><?= h($agenda->service_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($agenda->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($agenda->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Executed') ?></th>
            <td><?= $agenda->executed ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canceled') ?></th>
            <td><?= $agenda->canceled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Obs') ?></h4>
        <?= $this->Text->autoParagraph(h($agenda->obs)); ?>
    </div>
</div>
