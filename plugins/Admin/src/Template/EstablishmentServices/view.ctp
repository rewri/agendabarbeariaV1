<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $establishmentService
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Establishment Service'), ['action' => 'edit', $establishmentService->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Establishment Service'), ['action' => 'delete', $establishmentService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentService->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="establishmentServices view large-9 medium-8 columns content">
    <h3><?= h($establishmentService->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uuid') ?></th>
            <td><?= h($establishmentService->uuid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Establishment') ?></th>
            <td><?= $establishmentService->has('establishment') ? $this->Html->link($establishmentService->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $establishmentService->establishment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $establishmentService->has('service') ? $this->Html->link($establishmentService->service->name, ['controller' => 'Services', 'action' => 'view', $establishmentService->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($establishmentService->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($establishmentService->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($establishmentService->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($establishmentService->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $establishmentService->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
