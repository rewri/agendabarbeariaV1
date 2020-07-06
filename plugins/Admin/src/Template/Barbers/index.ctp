<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $barbers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Barber'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Barber Schedules'), ['controller' => 'BarberSchedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barber Schedule'), ['controller' => 'BarberSchedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Barber Services'), ['controller' => 'BarberServices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barber Service'), ['controller' => 'BarberServices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barbers index large-9 medium-8 columns content">
    <h3><?= __('Barbers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uuid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('establishment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('available') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enabled') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barbers as $barber): ?>
            <tr>
                <td><?= $this->Number->format($barber->id) ?></td>
                <td><?= h($barber->uuid) ?></td>
                <td><?= $barber->has('establishment') ? $this->Html->link($barber->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $barber->establishment->id]) : '' ?></td>
                <td><?= h($barber->name) ?></td>
                <td><?= h($barber->available) ?></td>
                <td><?= h($barber->enabled) ?></td>
                <td><?= h($barber->created) ?></td>
                <td><?= h($barber->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $barber->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $barber->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $barber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barber->id)]) ?>
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
