<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Meeting Entity
 *
 * @property int $id
 * @property string $type
 * @property string $date
 * @property string $time
 * @property string $place
 * @property string $description
 * @property int $institution_id
 *
 * @property \App\Model\Entity\Institution $institution
 */
class Meeting extends Entity
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
        'type' => true,
        'date' => true,
        'time' => true,
        'place' => true,
        'description' => true,
        'institution_id' => true
    ];
}
