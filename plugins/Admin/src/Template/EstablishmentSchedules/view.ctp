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
            <th scope="row"><?= __('Sunday Start') ?></th>
            <td><?= h($establishmentSchedule->sunday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday End') ?></th>
            <td><?= h($establishmentSchedule->sunday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday Pause Start') ?></th>
            <td><?= h($establishmentSchedule->sunday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday Pause End') ?></th>
            <td><?= h($establishmentSchedule->sunday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday Start') ?></th>
            <td><?= h($establishmentSchedule->monday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday End') ?></th>
            <td><?= h($establishmentSchedule->monday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday Pause Start') ?></th>
            <td><?= h($establishmentSchedule->monday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday Pause End') ?></th>
            <td><?= h($establishmentSchedule->monday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday Start') ?></th>
            <td><?= h($establishmentSchedule->tuesday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday End') ?></th>
            <td><?= h($establishmentSchedule->tuesday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday Pause Start') ?></th>
            <td><?= h($establishmentSchedule->tuesday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday Pause End') ?></th>
            <td><?= h($establishmentSchedule->tuesday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday Start') ?></th>
            <td><?= h($establishmentSchedule->wednesday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday End') ?></th>
            <td><?= h($establishmentSchedule->wednesday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday Pause Start') ?></th>
            <td><?= h($establishmentSchedule->wednesday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday Pause End') ?></th>
            <td><?= h($establishmentSchedule->wednesday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday Start') ?></th>
            <td><?= h($establishmentSchedule->thursday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday End') ?></th>
            <td><?= h($establishmentSchedule->thursday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday Pause Start') ?></th>
            <td><?= h($establishmentSchedule->thursday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday Pause End') ?></th>
            <td><?= h($establishmentSchedule->thursday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday Start') ?></th>
            <td><?= h($establishmentSchedule->friday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday End') ?></th>
            <td><?= h($establishmentSchedule->friday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday Pause Start') ?></th>
            <td><?= h($establishmentSchedule->friday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday Pause End') ?></th>
            <td><?= h($establishmentSchedule->friday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday Start') ?></th>
            <td><?= h($establishmentSchedule->saturday_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday End') ?></th>
            <td><?= h($establishmentSchedule->saturday_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday Pause Start') ?></th>
            <td><?= h($establishmentSchedule->saturday_pause_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday Pause End') ?></th>
            <td><?= h($establishmentSchedule->saturday_pause_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday') ?></th>
            <td><?= $establishmentSchedule->sunday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday') ?></th>
            <td><?= $establishmentSchedule->monday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday') ?></th>
            <td><?= $establishmentSchedule->tuesday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday') ?></th>
            <td><?= $establishmentSchedule->wednesday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday') ?></th>
            <td><?= $establishmentSchedule->thursday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday') ?></th>
            <td><?= $establishmentSchedule->friday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday') ?></th>
            <td><?= $establishmentSchedule->saturday ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
