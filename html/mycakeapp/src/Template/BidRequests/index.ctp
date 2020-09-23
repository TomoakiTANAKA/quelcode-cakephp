<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BidRequest[]|\Cake\Collection\CollectionInterface $bidRequests
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bid Request'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Items'), ['controller' => 'BidItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Item'), ['controller' => 'BidItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidRequests index large-9 medium-8 columns content">
    <h3><?= __('Bid Requests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bid_item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bidRequests as $bidRequest): ?>
            <tr>
                <td><?= $this->Number->format($bidRequest->id) ?></td>
                <td><?= $bidRequest->has('bid_item') ? $this->Html->link($bidRequest->bid_item->name, ['controller' => 'BidItems', 'action' => 'view', $bidRequest->bid_item->id]) : '' ?></td>
                <td><?= $bidRequest->has('user') ? $this->Html->link($bidRequest->user->id, ['controller' => 'Users', 'action' => 'view', $bidRequest->user->id]) : '' ?></td>
                <td><?= $this->Number->format($bidRequest->price) ?></td>
                <td><?= h($bidRequest->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bidRequest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bidRequest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bidRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidRequest->id)]) ?>
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
