<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $agendas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agendas index large-9 medium-8 columns content">
    <h3><?= __('Agendas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uuid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('establishment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('barber_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('executed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canceled') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agendas as $agenda): ?>
            <tr>
                <td><?= $this->Number->format($agenda->id) ?></td>
                <td><?= h($agenda->uuid) ?></td>
                <td><?= $agenda->has('user') ? $this->Html->link($agenda->user->name, ['controller' => 'Users', 'action' => 'view', $agenda->user->id]) : '' ?></td>
                <td><?= $agenda->has('establishment') ? $this->Html->link($agenda->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $agenda->establishment->id]) : '' ?></td>
                <td><?= $agenda->has('barber') ? $this->Html->link($agenda->barber->name, ['controller' => 'Barbers', 'action' => 'view', $agenda->barber->id]) : '' ?></td>
                <td><?= $agenda->has('service') ? $this->Html->link($agenda->service->name, ['controller' => 'Services', 'action' => 'view', $agenda->service->id]) : '' ?></td>
                <td><?= h($agenda->service_date) ?></td>
                <td><?= h($agenda->service_start) ?></td>
                <td><?= h($agenda->service_end) ?></td>
                <td><?= h($agenda->executed) ?></td>
                <td><?= h($agenda->canceled) ?></td>
                <td><?= h($agenda->created) ?></td>
                <td><?= h($agenda->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agenda->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agenda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
