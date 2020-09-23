<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BidItem $bidItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bid Item'), ['action' => 'edit', $bidItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bid Item'), ['action' => 'delete', $bidItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bid Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Information'), ['controller' => 'BidInformation', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Information'), ['controller' => 'BidInformation', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Requests'), ['controller' => 'BidRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Request'), ['controller' => 'BidRequests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bidItems view large-9 medium-8 columns content">
    <h3><?= h($bidItem->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $bidItem->has('user') ? $this->Html->link($bidItem->user->id, ['controller' => 'Users', 'action' => 'view', $bidItem->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($bidItem->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bidItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endtime') ?></th>
            <td><?= h($bidItem->endtime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bidItem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Finished') ?></th>
            <td><?= $bidItem->finished ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bid Information') ?></h4>
        <?php if (!empty($bidItem->bid_information)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bid Item Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bidItem->bid_information as $bidInformation): ?>
            <tr>
                <td><?= h($bidInformation->id) ?></td>
                <td><?= h($bidInformation->bid_item_id) ?></td>
                <td><?= h($bidInformation->user_id) ?></td>
                <td><?= h($bidInformation->price) ?></td>
                <td><?= h($bidInformation->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BidInformation', 'action' => 'view', $bidInformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BidInformation', 'action' => 'edit', $bidInformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BidInformation', 'action' => 'delete', $bidInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidInformation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bid Requests') ?></h4>
        <?php if (!empty($bidItem->bid_requests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bid Item Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bidItem->bid_requests as $bidRequests): ?>
            <tr>
                <td><?= h($bidRequests->id) ?></td>
                <td><?= h($bidRequests->bid_item_id) ?></td>
                <td><?= h($bidRequests->user_id) ?></td>
                <td><?= h($bidRequests->price) ?></td>
                <td><?= h($bidRequests->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BidRequests', 'action' => 'view', $bidRequests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BidRequests', 'action' => 'edit', $bidRequests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BidRequests', 'action' => 'delete', $bidRequests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidRequests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
