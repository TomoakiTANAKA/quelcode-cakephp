<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BidInformation Entity
 *
 * @property int $id
 * @property int $bid_item_id
 * @property int $user_id
 * @property int $price
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\BidItem $bid_item
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\BidMessage[] $bid_messages
 */
class BidInformation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'bid_item_id' => true,
        'user_id' => true,
        'price' => true,
        'created' => true,
        'bid_item' => true,
        'user' => true,
        'bid_messages' => true,
    ];
}