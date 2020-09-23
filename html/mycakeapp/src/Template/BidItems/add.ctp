<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BidItem $bidItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bid Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Information'), ['controller' => 'BidInformation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Information'), ['controller' => 'BidInformation', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Requests'), ['controller' => 'BidRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Request'), ['controller' => 'BidRequests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidItems form large-9 medium-8 columns content">
    <?= $this->Form->create($bidItem) ?>
    <fieldset>
        <legend><?= __('Add Bid Item') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('name');
            echo $this->Form->control('finished');
            echo $this->Form->control('endtime');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
