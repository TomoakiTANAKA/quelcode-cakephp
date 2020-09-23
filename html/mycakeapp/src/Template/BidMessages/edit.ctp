<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BidMessage $bidMessage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bidMessage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bidMessage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bid Messages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidMessages form large-9 medium-8 columns content">
    <?= $this->Form->create($bidMessage) ?>
    <fieldset>
        <legend><?= __('Edit Bid Message') ?></legend>
        <?php
            echo $this->Form->control('bid_information_id');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
