<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $establishmentService
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Establishment Services'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establishmentServices form large-9 medium-8 columns content">
    <?= $this->Form->create($establishmentService) ?>
    <fieldset>
        <legend><?= __('Add Establishment Service') ?></legend>
        <?php
            echo $this->Form->control('uuid');
            echo $this->Form->control('establishment_id', ['options' => $establishments]);
            echo $this->Form->control('service_id', ['options' => $services]);
            echo $this->Form->control('price');
            echo $this->Form->control('enabled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
