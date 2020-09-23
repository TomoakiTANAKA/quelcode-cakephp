<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BidInformation $bidInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bid Information'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bid Items'), ['controller' => 'BidItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Item'), ['controller' => 'BidItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Messages'), ['controller' => 'BidMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Message'), ['controller' => 'BidMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidInformation form large-9 medium-8 columns content">
    <?= $this->Form->create($bidInformation) ?>
    <fieldset>
        <legend><?= __('Add Bid Information') ?></legend>
        <?php
            echo $this->Form->control('bid_item_id', ['options' => $bidItems]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
