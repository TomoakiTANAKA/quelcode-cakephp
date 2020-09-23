<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BidInformation $bidInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bid Information'), ['action' => 'edit', $bidInformation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bid Information'), ['action' => 'delete', $bidInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidInformation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bid Information'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Information'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Items'), ['controller' => 'BidItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Item'), ['controller' => 'BidItems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Messages'), ['controller' => 'BidMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Message'), ['controller' => 'BidMessages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bidInformation view large-9 medium-8 columns content">
    <h3><?= h($bidInformation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bid Item') ?></th>
            <td><?= $bidInformation->has('bid_item') ? $this->Html->link($bidInformation->bid_item->name, ['controller' => 'BidItems', 'action' => 'view', $bidInformation->bid_item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $bidInformation->has('user') ? $this->Html->link($bidInformation->user->id, ['controller' => 'Users', 'action' => 'view', $bidInformation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bidInformation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($bidInformation->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bidInformation->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bid Messages') ?></h4>
        <?php if (!empty($bidInformation->bid_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bid Information Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bidInformation->bid_messages as $bidMessages): ?>
            <tr>
                <td><?= h($bidMessages->id) ?></td>
                <td><?= h($bidMessages->bid_information_id) ?></td>
                <td><?= h($bidMessages->user_id) ?></td>
                <td><?= h($bidMessages->message) ?></td>
                <td><?= h($bidMessages->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BidMessages', 'action' => 'view', $bidMessages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BidMessages', 'action' => 'edit', $bidMessages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BidMessages', 'action' => 'delete', $bidMessages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidMessages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
