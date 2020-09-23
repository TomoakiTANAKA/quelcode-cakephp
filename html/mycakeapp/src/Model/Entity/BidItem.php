<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BidItem Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property bool $finished
 * @property \Cake\I18n\Time $endtime
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\BidInformation[] $bid_information
 * @property \App\Model\Entity\BidRequest[] $bid_requests
 */
class BidItem extends Entity
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
        'user_id' => true,
        'name' => true,
        'finished' => true,
        'endtime' => true,
        'created' => true,
        'user' => true,
        'bid_information' => true,
        'bid_requests' => true,
    ];
}
