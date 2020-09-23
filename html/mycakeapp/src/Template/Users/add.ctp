<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bid Information'), ['controller' => 'BidInformation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Information'), ['controller' => 'BidInformation', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Items'), ['controller' => 'BidItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Item'), ['controller' => 'BidItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Messages'), ['controller' => 'BidMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Message'), ['controller' => 'BidMessages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Requests'), ['controller' => 'BidRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Request'), ['controller' => 'BidRequests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
