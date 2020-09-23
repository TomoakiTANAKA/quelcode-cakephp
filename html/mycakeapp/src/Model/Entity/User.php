<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $role
 *
 * @property \App\Model\Entity\BidInformation[] $bid_information
 * @property \App\Model\Entity\BidItem[] $bid_items
 * @property \App\Model\Entity\BidMessage[] $bid_messages
 * @property \App\Model\Entity\BidRequest[] $bid_requests
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'role' => true,
        'bid_information' => true,
        'bid_items' => true,
        'bid_messages' => true,
        'bid_requests' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
