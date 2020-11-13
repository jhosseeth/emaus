<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MeetingsPerson Entity
 *
 * @property int $id
 * @property string|resource $assistance
 * @property int $reason
 * @property string $description
 * @property int $meeting_id
 * @property int $person_id
 *
 * @property \App\Model\Entity\Meeting $meeting
 * @property \App\Model\Entity\Person $person
 */
class MeetingsPerson extends Entity
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
        'assistance' => true,
        'reason' => true,
        'description' => true,
        'meeting_id' => true,
        'person_id' => true
    ];
}
