<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $price
 * @property string $description
 * @property int $category_id
 * @property string $img_name
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Product extends Entity
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
        'name' => true,
        'price' => true,
        'description' => true,
        'category_id' => true,
        'img_name' => true,
        'category' => true,
        'reservations' => true,
    ];
}
