<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carouselimg Entity
 *
 * @property int $id
 * @property string $img_sm_name
 * @property string $img_md_name
 * @property string $img_lg_name
 */
class Carouselimg extends Entity
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
        'img_sm_name' => true,
        'img_md_name' => true,
        'img_lg_name' => true,
    ];
}
