<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $barber
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Barbers'), ['action' => 'index']) ?></li>
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
<div class="barbers form large-9 medium-8 columns content">
    <?= $this->Form->create($barber) ?>
    <fieldset>
        <legend><?= __('Add Barber') ?></legend>
        <?php
            echo $this->Form->control('uuid');
            echo $this->Form->control('establishment_id', ['options' => $establishments]);
            echo $this->Form->control('name');
            echo $this->Form->control('available');
            echo $this->Form->control('enabled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
