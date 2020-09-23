<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Information'), ['controller' => 'BidInformation', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Information'), ['controller' => 'BidInformation', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Items'), ['controller' => 'BidItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Item'), ['controller' => 'BidItems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Messages'), ['controller' => 'BidMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Message'), ['controller' => 'BidMessages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Requests'), ['controller' => 'BidRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Request'), ['controller' => 'BidRequests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bid Information') ?></h4>
        <?php if (!empty($user->bid_information)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bid Item Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->bid_information as $bidInformation): ?>
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
        <h4><?= __('Related Bid Items') ?></h4>
        <?php if (!empty($user->bid_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Finished') ?></th>
                <th scope="col"><?= __('Endtime') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->bid_items as $bidItems): ?>
            <tr>
                <td><?= h($bidItems->id) ?></td>
                <td><?= h($bidItems->user_id) ?></td>
                <td><?= h($bidItems->name) ?></td>
                <td><?= h($bidItems->finished) ?></td>
                <td><?= h($bidItems->endtime) ?></td>
                <td><?= h($bidItems->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BidItems', 'action' => 'view', $bidItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BidItems', 'action' => 'edit', $bidItems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BidItems', 'action' => 'delete', $bidItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bid Messages') ?></h4>
        <?php if (!empty($user->bid_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bid Information Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->bid_messages as $bidMessages): ?>
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
    <div class="related">
        <h4><?= __('Related Bid Requests') ?></h4>
        <?php if (!empty($user->bid_requests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bid Item Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->bid_requests as $bidRequests): ?>
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
