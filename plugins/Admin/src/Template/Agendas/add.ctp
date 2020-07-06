<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $agenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agendas form large-9 medium-8 columns content">
    <?= $this->Form->create($agenda) ?>
    <fieldset>
        <legend><?= __('Add Agenda') ?></legend>
        <?php
            echo $this->Form->control('uuid');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('establishment_id', ['options' => $establishments]);
            echo $this->Form->control('barber_id', ['options' => $barbers]);
            echo $this->Form->control('service_id', ['options' => $services]);
            echo $this->Form->control('service_date');
            echo $this->Form->control('service_start');
            echo $this->Form->control('service_end');
            echo $this->Form->control('obs');
            echo $this->Form->control('executed');
            echo $this->Form->control('canceled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
