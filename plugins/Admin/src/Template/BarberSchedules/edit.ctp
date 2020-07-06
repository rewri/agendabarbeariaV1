<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $barberSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $barberSchedule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $barberSchedule->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Barber Schedules'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barberSchedules form large-9 medium-8 columns content">
    <?= $this->Form->create($barberSchedule) ?>
    <fieldset>
        <legend><?= __('Edit Barber Schedule') ?></legend>
        <?php
            echo $this->Form->control('uuid');
            echo $this->Form->control('barber_id', ['options' => $barbers]);
            echo $this->Form->control('sunday');
            echo $this->Form->control('sunday_start');
            echo $this->Form->control('sunday_end');
            echo $this->Form->control('sunday_pause_start');
            echo $this->Form->control('sunday_pause_end');
            echo $this->Form->control('monday');
            echo $this->Form->control('monday_start');
            echo $this->Form->control('monday_end');
            echo $this->Form->control('monday_pause_start');
            echo $this->Form->control('monday_pause_end');
            echo $this->Form->control('tuesday');
            echo $this->Form->control('tuesday_start');
            echo $this->Form->control('tuesday_end');
            echo $this->Form->control('tuesday_pause_start');
            echo $this->Form->control('tuesday_pause_end');
            echo $this->Form->control('wednesday');
            echo $this->Form->control('wednesday_start');
            echo $this->Form->control('wednesday_end');
            echo $this->Form->control('wednesday_pause_start');
            echo $this->Form->control('wednesday_pause_end');
            echo $this->Form->control('thursday');
            echo $this->Form->control('thursday_start');
            echo $this->Form->control('thursday_end');
            echo $this->Form->control('thursday_pause_start');
            echo $this->Form->control('thursday_pause_end');
            echo $this->Form->control('friday');
            echo $this->Form->control('friday_start');
            echo $this->Form->control('friday_end');
            echo $this->Form->control('friday_pause_start');
            echo $this->Form->control('friday_pause_end');
            echo $this->Form->control('saturday');
            echo $this->Form->control('saturday_start');
            echo $this->Form->control('saturday_end');
            echo $this->Form->control('saturday_pause_start');
            echo $this->Form->control('saturday_pause_end');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
