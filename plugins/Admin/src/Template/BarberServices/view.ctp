<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $barberService
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Barber Service'), ['action' => 'edit', $barberService->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Barber Service'), ['action' => 'delete', $barberService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barberService->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Barber Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barber Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="barberServices view large-9 medium-8 columns content">
    <h3><?= h($barberService->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uuid') ?></th>
            <td><?= h($barberService->uuid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Barber') ?></th>
            <td><?= $barberService->has('barber') ? $this->Html->link($barberService->barber->name, ['controller' => 'Barbers', 'action' => 'view', $barberService->barber->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $barberService->has('service') ? $this->Html->link($barberService->service->name, ['controller' => 'Services', 'action' => 'view', $barberService->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($barberService->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($barberService->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($barberService->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $barberService->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
