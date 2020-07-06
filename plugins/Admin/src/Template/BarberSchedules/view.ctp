<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $barberSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Barber Schedule'), ['action' => 'edit', $barberSchedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Barber Schedule'), ['action' => 'delete', $barberSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barberSchedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Barber Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barber Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="barberSchedules view large-9 medium-8 columns content">
    <h3><?= h($barberSchedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uuid') ?></th>
            <td><?= h($barberSchedule->uuid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Barber') ?></th>
            <td><?= $barberSchedule->has('barber') ? $this->Html->link($barberSchedule->barber->name, ['controller' => 'Barbers', 'action' => 'view', $barberSchedule->barber->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($barberSchedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday Start') ?></th>
            <td><?= h($barberSchedule->sunday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday End') ?></th>
            <td><?= h($barberSchedule->sunday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday Pause Start') ?></th>
            <td><?= h($barberSchedule->sunday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday Pause End') ?></th>
            <td><?= h($barberSchedule->sunday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday Start') ?></th>
            <td><?= h($barberSchedule->monday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday End') ?></th>
            <td><?= h($barberSchedule->monday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday Pause Start') ?></th>
            <td><?= h($barberSchedule->monday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday Pause End') ?></th>
            <td><?= h($barberSchedule->monday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday Start') ?></th>
            <td><?= h($barberSchedule->tuesday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday End') ?></th>
            <td><?= h($barberSchedule->tuesday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday Pause Start') ?></th>
            <td><?= h($barberSchedule->tuesday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday Pause End') ?></th>
            <td><?= h($barberSchedule->tuesday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday Start') ?></th>
            <td><?= h($barberSchedule->wednesday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday End') ?></th>
            <td><?= h($barberSchedule->wednesday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday Pause Start') ?></th>
            <td><?= h($barberSchedule->wednesday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday Pause End') ?></th>
            <td><?= h($barberSchedule->wednesday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday Start') ?></th>
            <td><?= h($barberSchedule->thursday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday End') ?></th>
            <td><?= h($barberSchedule->thursday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday Pause Start') ?></th>
            <td><?= h($barberSchedule->thursday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday Pause End') ?></th>
            <td><?= h($barberSchedule->thursday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday Start') ?></th>
            <td><?= h($barberSchedule->friday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday End') ?></th>
            <td><?= h($barberSchedule->friday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday Pause Start') ?></th>
            <td><?= h($barberSchedule->friday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday Pause End') ?></th>
            <td><?= h($barberSchedule->friday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday Start') ?></th>
            <td><?= h($barberSchedule->saturday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday End') ?></th>
            <td><?= h($barberSchedule->saturday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday Pause Start') ?></th>
            <td><?= h($barberSchedule->saturday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday Pause End') ?></th>
            <td><?= h($barberSchedule->saturday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday') ?></th>
            <td><?= $barberSchedule->sunday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday') ?></th>
            <td><?= $barberSchedule->monday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday') ?></th>
            <td><?= $barberSchedule->tuesday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday') ?></th>
            <td><?= $barberSchedule->wednesday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday') ?></th>
            <td><?= $barberSchedule->thursday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday') ?></th>
            <td><?= $barberSchedule->friday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday') ?></th>
            <td><?= $barberSchedule->saturday ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
