<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $establishment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $establishment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $establishment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Establishments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Schedules'), ['controller' => 'EstablishmentSchedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Schedule'), ['controller' => 'EstablishmentSchedules', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establishments form large-9 medium-8 columns content">
    <?= $this->Form->create($establishment) ?>
    <fieldset>
        <legend><?= __('Edit Establishment') ?></legend>
        <?php
            echo $this->Form->control('uuid');
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('address');
            echo $this->Form->control('city');
            echo $this->Form->control('phone');
            echo $this->Form->control('enabled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
