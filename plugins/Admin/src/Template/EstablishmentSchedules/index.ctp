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
            <?php foreach ($establishmentSchedules as $establishmentSchedule): ?>
            <tr>
                <td><?= $this->Number->format($establishmentSchedule->id) ?></td>
                <td><?= h($establishmentSchedule->uuid) ?></td>
                <td><?= $establishmentSchedule->has('establishment') ? $this->Html->link($establishmentSchedule->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $establishmentSchedule->establishment->id]) : '' ?></td>
                <td><?= h($establishmentSchedule->sunday) ?></td>
                <td><?= h($establishmentSchedule->sunday_start) ?></td>
                <td><?= h($establishmentSchedule->sunday_end) ?></td>
                <td><?= h($establishmentSchedule->sunday_pause_start) ?></td>
                <td><?= h($establishmentSchedule->sunday_pause_end) ?></td>
                <td><?= h($establishmentSchedule->monday) ?></td>
                <td><?= h($establishmentSchedule->monday_start) ?></td>
                <td><?= h($establishmentSchedule->monday_end) ?></td>
                <td><?= h($establishmentSchedule->monday_pause_start) ?></td>
                <td><?= h($establishmentSchedule->monday_pause_end) ?></td>
                <td><?= h($establishmentSchedule->tuesday) ?></td>
                <td><?= h($establishmentSchedule->tuesday_start) ?></td>
                <td><?= h($establishmentSchedule->tuesday_end) ?></td>
                <td><?= h($establishmentSchedule->tuesday_pause_start) ?></td>
                <td><?= h($establishmentSchedule->tuesday_pause_end) ?></td>
                <td><?= h($establishmentSchedule->wednesday) ?></td>
                <td><?= h($establishmentSchedule->wednesday_start) ?></td>
                <td><?= h($establishmentSchedule->wednesday_end) ?></td>
                <td><?= h($establishmentSchedule->wednesday_pause_start) ?></td>
                <td><?= h($establishmentSchedule->wednesday_pause_end) ?></td>
                <td><?= h($establishmentSchedule->thursday) ?></td>
                <td><?= h($establishmentSchedule->thursday_start) ?></td>
                <td><?= h($establishmentSchedule->thursday_end) ?></td>
                <td><?= h($establishmentSchedule->thursday_pause_start) ?></td>
                <td><?= h($establishmentSchedule->thursday_pause_end) ?></td>
                <td><?= h($establishmentSchedule->friday) ?></td>
                <td><?= h($establishmentSchedule->friday_start) ?></td>
                <td><?= h($establishmentSchedule->friday_end) ?></td>
                <td><?= h($establishmentSchedule->friday_pause_start) ?></td>
                <td><?= h($establishmentSchedule->friday_pause_end) ?></td>
                <td><?= h($establishmentSchedule->saturday) ?></td>
                <td><?= h($establishmentSchedule->saturday_start) ?></td>
                <td><?= h($establishmentSchedule->saturday_end) ?></td>
                <td><?= h($establishmentSchedule->saturday_pause_start) ?></td>
                <td><?= h($establishmentSchedule->saturday_pause_end) ?></td>
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
