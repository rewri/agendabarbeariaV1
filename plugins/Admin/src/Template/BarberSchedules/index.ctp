<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $barberSchedules
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Barber Schedule'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barberSchedules index large-9 medium-8 columns content">
    <h3><?= __('Barber Schedules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uuid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('barber_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sunday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sunday_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sunday_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sunday_pause_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sunday_pause_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monday_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monday_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monday_pause_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monday_pause_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tuesday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tuesday_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tuesday_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tuesday_pause_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tuesday_pause_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wednesday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wednesday_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wednesday_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wednesday_pause_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wednesday_pause_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thursday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thursday_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thursday_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thursday_pause_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thursday_pause_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('friday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('friday_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('friday_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('friday_pause_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('friday_pause_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saturday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saturday_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saturday_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saturday_pause_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saturday_pause_end') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barberSchedules as $barberSchedule): ?>
            <tr>
                <td><?= $this->Number->format($barberSchedule->id) ?></td>
                <td><?= h($barberSchedule->uuid) ?></td>
                <td><?= $barberSchedule->has('barber') ? $this->Html->link($barberSchedule->barber->name, ['controller' => 'Barbers', 'action' => 'view', $barberSchedule->barber->id]) : '' ?></td>
                <td><?= h($barberSchedule->sunday) ?></td>
                <td><?= h($barberSchedule->sunday_start) ?></td>
                <td><?= h($barberSchedule->sunday_end) ?></td>
                <td><?= h($barberSchedule->sunday_pause_start) ?></td>
                <td><?= h($barberSchedule->sunday_pause_end) ?></td>
                <td><?= h($barberSchedule->monday) ?></td>
                <td><?= h($barberSchedule->monday_start) ?></td>
                <td><?= h($barberSchedule->monday_end) ?></td>
                <td><?= h($barberSchedule->monday_pause_start) ?></td>
                <td><?= h($barberSchedule->monday_pause_end) ?></td>
                <td><?= h($barberSchedule->tuesday) ?></td>
                <td><?= h($barberSchedule->tuesday_start) ?></td>
                <td><?= h($barberSchedule->tuesday_end) ?></td>
                <td><?= h($barberSchedule->tuesday_pause_start) ?></td>
                <td><?= h($barberSchedule->tuesday_pause_end) ?></td>
                <td><?= h($barberSchedule->wednesday) ?></td>
                <td><?= h($barberSchedule->wednesday_start) ?></td>
                <td><?= h($barberSchedule->wednesday_end) ?></td>
                <td><?= h($barberSchedule->wednesday_pause_start) ?></td>
                <td><?= h($barberSchedule->wednesday_pause_end) ?></td>
                <td><?= h($barberSchedule->thursday) ?></td>
                <td><?= h($barberSchedule->thursday_start) ?></td>
                <td><?= h($barberSchedule->thursday_end) ?></td>
                <td><?= h($barberSchedule->thursday_pause_start) ?></td>
                <td><?= h($barberSchedule->thursday_pause_end) ?></td>
                <td><?= h($barberSchedule->friday) ?></td>
                <td><?= h($barberSchedule->friday_start) ?></td>
                <td><?= h($barberSchedule->friday_end) ?></td>
                <td><?= h($barberSchedule->friday_pause_start) ?></td>
                <td><?= h($barberSchedule->friday_pause_end) ?></td>
                <td><?= h($barberSchedule->saturday) ?></td>
                <td><?= h($barberSchedule->saturday_start) ?></td>
                <td><?= h($barberSchedule->saturday_end) ?></td>
                <td><?= h($barberSchedule->saturday_pause_start) ?></td>
                <td><?= h($barberSchedule->saturday_pause_end) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $barberSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $barberSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $barberSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barberSchedule->id)]) ?>
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
