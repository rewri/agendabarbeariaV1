<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $establishmentSchedules
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Establishment Schedule'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establishmentSchedules index large-9 medium-8 columns content">
    <h3><?= __('Establishment Schedules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uuid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('establishment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weekday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('open') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lunch_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lunch_length') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($establishmentSchedules as $establishmentSchedule): ?>
            <tr>
                <td><?= $this->Number->format($establishmentSchedule->id) ?></td>
                <td><?= h($establishmentSchedule->uuid) ?></td>
                <td><?= $establishmentSchedule->has('establishment') ? $this->Html->link($establishmentSchedule->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $establishmentSchedule->establishment->id]) : '' ?></td>
                <td><?= $this->Number->format($establishmentSchedule->weekday) ?></td>
                <td><?= h($establishmentSchedule->open) ?></td>
                <td><?= h($establishmentSchedule->start_time) ?></td>
                <td><?= h($establishmentSchedule->end_time) ?></td>
                <td><?= h($establishmentSchedule->lunch_time) ?></td>
                <td><?= $this->Number->format($establishmentSchedule->lunch_length) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $establishmentSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $establishmentSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $establishmentSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentSchedule->id)]) ?>
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
