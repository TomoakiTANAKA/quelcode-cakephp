<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BidInformation[]|\Cake\Collection\CollectionInterface $bidInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bid Information'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Items'), ['controller' => 'BidItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Item'), ['controller' => 'BidItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Messages'), ['controller' => 'BidMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Message'), ['controller' => 'BidMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidInformation index large-9 medium-8 columns content">
    <h3><?= __('Bid Information') ?></h3>
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
            <?php foreach ($bidInformation as $bidInformation): ?>
            <tr>
                <td><?= $this->Number->format($bidInformation->id) ?></td>
                <td><?= $bidInformation->has('bid_item') ? $this->Html->link($bidInformation->bid_item->name, ['controller' => 'BidItems', 'action' => 'view', $bidInformation->bid_item->id]) : '' ?></td>
                <td><?= $bidInformation->has('user') ? $this->Html->link($bidInformation->user->id, ['controller' => 'Users', 'action' => 'view', $bidInformation->user->id]) : '' ?></td>
                <td><?= $this->Number->format($bidInformation->price) ?></td>
                <td><?= h($bidInformation->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bidInformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bidInformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bidInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidInformation->id)]) ?>
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
