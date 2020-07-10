<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $establishmentServices
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Establishment Service'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establishmentServices index large-9 medium-8 columns content">
    <h3><?= __('Establishment Services') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uuid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('establishment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enabled') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($establishmentServices as $establishmentService): ?>
            <tr>
                <td><?= $this->Number->format($establishmentService->id) ?></td>
                <td><?= h($establishmentService->uuid) ?></td>
                <td><?= $establishmentService->has('establishment') ? $this->Html->link($establishmentService->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $establishmentService->establishment->id]) : '' ?></td>
                <td><?= $establishmentService->has('service') ? $this->Html->link($establishmentService->service->name, ['controller' => 'Services', 'action' => 'view', $establishmentService->service->id]) : '' ?></td>
                <td><?= $this->Number->format($establishmentService->price) ?></td>
                <td><?= h($establishmentService->enabled) ?></td>
                <td><?= h($establishmentService->created) ?></td>
                <td><?= h($establishmentService->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $establishmentService->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $establishmentService->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $establishmentService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentService->id)]) ?>
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
