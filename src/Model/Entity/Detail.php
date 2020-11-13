<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detail Entity
 *
 * @property int $id
 * @property string $departament
 * @property string $city
 * @property string $neighborhood
 * @property string $address
 * @property string $telephone
 * @property string $email
 * @property int $institution_id
 *
 * @property \App\Model\Entity\Institution $institution
 */
class Detail extends Entity
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
        'departament' => true,
        'city' => true,
        'neighborhood' => true,
        'address' => true,
        'telephone' => true,
        'email' => true,
        'institution_id' => true,
        'institution' => true
    ];
}
