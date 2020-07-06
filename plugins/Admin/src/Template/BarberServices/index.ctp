<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $barberServices
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Barber Service'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Barbers'), ['controller' => 'Barbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barber'), ['controller' => 'Barbers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barberServices index large-9 medium-8 columns content">
    <h3><?= __('Barber Services') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uuid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('barber_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enabled') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barberServices as $barberService): ?>
            <tr>
                <td><?= $this->Number->format($barberService->id) ?></td>
                <td><?= h($barberService->uuid) ?></td>
                <td><?= $barberService->has('barber') ? $this->Html->link($barberService->barber->name, ['controller' => 'Barbers', 'action' => 'view', $barberService->barber->id]) : '' ?></td>
                <td><?= $barberService->has('service') ? $this->Html->link($barberService->service->name, ['controller' => 'Services', 'action' => 'view', $barberService->service->id]) : '' ?></td>
                <td><?= h($barberService->enabled) ?></td>
                <td><?= h($barberService->created) ?></td>
                <td><?= h($barberService->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $barberService->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $barberService->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $barberService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barberService->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
