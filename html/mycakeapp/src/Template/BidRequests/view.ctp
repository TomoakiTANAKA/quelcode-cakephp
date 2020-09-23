<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BidRequest $bidRequest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bid Request'), ['action' => 'edit', $bidRequest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bid Request'), ['action' => 'delete', $bidRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidRequest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bid Requests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Request'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Items'), ['controller' => 'BidItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Item'), ['controller' => 'BidItems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bidRequests view large-9 medium-8 columns content">
    <h3><?= h($bidRequest->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bid Item') ?></th>
            <td><?= $bidRequest->has('bid_item') ? $this->Html->link($bidRequest->bid_item->name, ['controller' => 'BidItems', 'action' => 'view', $bidRequest->bid_item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $bidRequest->has('user') ? $this->Html->link($bidRequest->user->id, ['controller' => 'Users', 'action' => 'view', $bidRequest->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bidRequest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($bidRequest->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bidRequest->created) ?></td>
        </tr>
    </table>
</div>
