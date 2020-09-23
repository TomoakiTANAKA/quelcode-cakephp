<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BidMessage $bidMessage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bid Message'), ['action' => 'edit', $bidMessage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bid Message'), ['action' => 'delete', $bidMessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidMessage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bid Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Message'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bidMessages view large-9 medium-8 columns content">
    <h3><?= h($bidMessage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $bidMessage->has('user') ? $this->Html->link($bidMessage->user->id, ['controller' => 'Users', 'action' => 'view', $bidMessage->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bidMessage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bid Information Id') ?></th>
            <td><?= $this->Number->format($bidMessage->bid_information_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bidMessage->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($bidMessage->message)); ?>
    </div>
</div>
