<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property string $total
 * @property \Cake\I18n\FrozenTime $created_at
 * @property int $client_id
 * @property int $id
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Product[] $products
 */
class Reservation extends Entity
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
        'total' => true,
        'created_at' => true,
        'client_id' => true,
        'client' => true,
        'products' => true,
    ];
}
