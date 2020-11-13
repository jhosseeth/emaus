<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Institution Entity
 *
 * @property int $id
 * @property string $name
 * @property string $type
 *
 * @property \App\Model\Entity\Detail[] $details
 * @property \App\Model\Entity\Meeting[] $meetings
 * @property \App\Model\Entity\Person[] $people
 */
class Institution extends Entity
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
        'type' => true,
        'parent_id' => true,
        'details' => true,
        'meetings' => true,
        'people' => true
    ];
}
