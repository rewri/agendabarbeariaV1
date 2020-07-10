<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $establishmentSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Establishment Schedule'), ['action' => 'edit', $establishmentSchedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Establishment Schedule'), ['action' => 'delete', $establishmentSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentSchedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="establishmentSchedules view large-9 medium-8 columns content">
    <h3><?= h($establishmentSchedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uuid') ?></th>
            <td><?= h($establishmentSchedule->uuid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Establishment') ?></th>
            <td><?= $establishmentSchedule->has('establishment') ? $this->Html->link($establishmentSchedule->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $establishmentSchedule->establishment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($establishmentSchedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weekday') ?></th>
            <td><?= $this->Number->format($establishmentSchedule->weekday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lunch Length') ?></th>
            <td><?= $this->Number->format($establishmentSchedule->lunch_length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Time') ?></th>
            <td><?= h($establishmentSchedule->start_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($establishmentSchedule->end_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lunch Time') ?></th>
            <td><?= h($establishmentSchedule->lunch_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Open') ?></th>
            <td><?= $establishmentSchedule->open ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
