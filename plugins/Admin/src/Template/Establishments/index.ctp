<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $establishments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Establishment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Schedules'), ['controller' => 'EstablishmentSchedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Schedule'), ['controller' => 'EstablishmentSchedules', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establishments index large-9 medium-8 columns content">
    <h3><?= __('Establishments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uuid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enabled') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($establishments as $establishment): ?>
            <tr>
                <td><?= $this->Number->format($establishment->id) ?></td>
                <td><?= h($establishment->uuid) ?></td>
                <td><?= h($establishment->name) ?></td>
                <td><?= h($establishment->address) ?></td>
                <td><?= h($establishment->city) ?></td>
                <td><?= h($establishment->phone) ?></td>
                <td><?= h($establishment->enabled) ?></td>
                <td><?= h($establishment->created) ?></td>
                <td><?= h($establishment->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $establishment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $establishment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $establishment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishment->id)]) ?>
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
