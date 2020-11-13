<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InstitutionsPerson Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $start
 * @property \Cake\I18n\FrozenDate $end
 * @property int $person_id
 * @property int $institution_id
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Institution $institution
 */
class InstitutionsPerson extends Entity
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
        'start' => true,
        'end' => true,
        'person_id' => true,
        'institution_id' => true
    ];
}
