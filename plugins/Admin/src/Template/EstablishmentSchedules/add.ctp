<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $establishmentSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Establishment Schedules'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establishmentSchedules form large-9 medium-8 columns content">
    <?= $this->Form->create($establishmentSchedule) ?>
    <fieldset>
        <legend><?= __('Add Establishment Schedule') ?></legend>
        <?php
            echo $this->Form->control('uuid');
            echo $this->Form->control('establishment_id', ['options' => $establishments]);
            echo $this->Form->control('weekday');
            echo $this->Form->control('open');
            echo $this->Form->control('start_time', ['empty' => true]);
            echo $this->Form->control('end_time', ['empty' => true]);
            echo $this->Form->control('lunch_time', ['empty' => true]);
            echo $this->Form->control('lunch_length');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
