<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * People Model
 *
 * @property \App\Model\Table\InstitutionsTable|\Cake\ORM\Association\BelongsToMany $Institutions
 * @property \App\Model\Table\MeetingsTable|\Cake\ORM\Association\BelongsToMany $Meetings
 *
 * @method \App\Model\Entity\Person get($primaryKey, $options = [])
 * @method \App\Model\Entity\Person newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Person[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Person|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Person[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Person findOrCreate($search, callable $callback = null, $options = [])
 */
class PeopleTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('people');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Institutions', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'institution_id',
            'joinTable' => 'institutions_people'
        ]);
        $this->belongsToMany('Meetings', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'meeting_id',
            'joinTable' => 'meetings_people'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 45)
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        $validator
            ->date('birthday')
            ->allowEmpty('birthday');

        $validator
            ->scalar('city')
            ->maxLength('city', 45)
            ->allowEmpty('city');

        $validator
            ->scalar('neighborhood')
            ->maxLength('neighborhood', 45)
            ->allowEmpty('neighborhood');

        $validator
            ->scalar('address')
            ->maxLength('address', 45)
            ->allowEmpty('address');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 45)
            ->allowEmpty('telephone');

        $validator
            ->scalar('cellphone')
            ->maxLength('cellphone', 45)
            ->allowEmpty('cellphone');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 45)
            ->allowEmpty('photo');

        $validator
            ->integer('member')
            ->requirePresence('member', 'create')
            ->notEmpty('member');

        return $validator;
    }
}
