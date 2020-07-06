<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $service
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Barber Services'), ['controller' => 'BarberServices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barber Service'), ['controller' => 'BarberServices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="services view large-9 medium-8 columns content">
    <h3><?= h($service->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($service->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($service->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration In Minutes') ?></th>
            <td><?= $this->Number->format($service->duration_in_minutes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($service->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($service->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $service->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($service->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Agendas') ?></h4>
        <?php if (!empty($service->agendas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uuid') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Establishment Id') ?></th>
                <th scope="col"><?= __('Barber Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Service Date') ?></th>
                <th scope="col"><?= __('Service Start') ?></th>
                <th scope="col"><?= __('Service End') ?></th>
                <th scope="col"><?= __('Obs') ?></th>
                <th scope="col"><?= __('Executed') ?></th>
                <th scope="col"><?= __('Canceled') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($service->agendas as $agendas): ?>
            <tr>
                <td><?= h($agendas->id) ?></td>
                <td><?= h($agendas->uuid) ?></td>
                <td><?= h($agendas->user_id) ?></td>
                <td><?= h($agendas->establishment_id) ?></td>
                <td><?= h($agendas->barber_id) ?></td>
                <td><?= h($agendas->service_id) ?></td>
                <td><?= h($agendas->service_date) ?></td>
                <td><?= h($agendas->service_start) ?></td>
                <td><?= h($agendas->service_end) ?></td>
                <td><?= h($agendas->obs) ?></td>
                <td><?= h($agendas->executed) ?></td>
                <td><?= h($agendas->canceled) ?></td>
                <td><?= h($agendas->created) ?></td>
                <td><?= h($agendas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendas', 'action' => 'view', $agendas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendas', 'action' => 'edit', $agendas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendas', 'action' => 'delete', $agendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Barber Services') ?></h4>
        <?php if (!empty($service->barber_services)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uuid') ?></th>
                <th scope="col"><?= __('Barber Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Enabled') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($service->barber_services as $barberServices): ?>
            <tr>
                <td><?= h($barberServices->id) ?></td>
                <td><?= h($barberServices->uuid) ?></td>
                <td><?= h($barberServices->barber_id) ?></td>
                <td><?= h($barberServices->service_id) ?></td>
                <td><?= h($barberServices->enabled) ?></td>
                <td><?= h($barberServices->created) ?></td>
                <td><?= h($barberServices->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BarberServices', 'action' => 'view', $barberServices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BarberServices', 'action' => 'edit', $barberServices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BarberServices', 'action' => 'delete', $barberServices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barberServices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
