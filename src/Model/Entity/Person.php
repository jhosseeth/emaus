<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property \Cake\I18n\FrozenDate $birthday
 * @property string $city
 * @property string $neighborhood
 * @property string $address
 * @property string $telephone
 * @property string $cellphone
 * @property string $photo
 * @property int $member
 *
 * @property \App\Model\Entity\Institution[] $institutions
 * @property \App\Model\Entity\Meeting[] $meetings
 */
class Person extends Entity
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
        'lastname' => true,
        'birthday' => true,
        'city' => true,
        'neighborhood' => true,
        'address' => true,
        'telephone' => true,
        'cellphone' => true,
        'photo' => true,
        'member' => true,
        'institutions' => true,
        'meetings' => true
    ];
}
