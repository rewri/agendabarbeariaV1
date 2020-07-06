<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $barberService
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Barber Services'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barberServices form large-9 medium-8 columns content">
    <?= $this->Form->create($barberService) ?>
    <fieldset>
        <legend><?= __('Add Barber Service') ?></legend>
        <?php
            echo $this->Form->control('uuid');
            echo $this->Form->control('barber_id', ['options' => $barbers]);
            echo $this->Form->control('service_id', ['options' => $services]);
            echo $this->Form->control('enabled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
