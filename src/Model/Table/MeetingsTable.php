<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Meetings Model
 *
 * @property \App\Model\Table\InstitutionsTable|\Cake\ORM\Association\BelongsTo $Institutions
 *
 * @method \App\Model\Entity\Meeting get($primaryKey, $options = [])
 * @method \App\Model\Entity\Meeting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Meeting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Meeting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Meeting|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Meeting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Meeting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Meeting findOrCreate($search, callable $callback = null, $options = [])
 */
class MeetingsTable extends Table
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

        $this->setTable('meetings');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id']);

        $this->belongsTo('Institutions', [
            'foreignKey' => 'institution_id',
            'joinType' => 'INNER'
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
            ->scalar('type')
            ->maxLength('type', 45)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->scalar('date')
            ->maxLength('date', 45)
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->scalar('time')
            ->maxLength('time', 45)
            ->requirePresence('time', 'create')
            ->notEmpty('time');

        $validator
            ->scalar('place')
            ->maxLength('place', 45)
            ->requirePresence('place', 'create')
            ->notEmpty('place');

        $validator
            ->scalar('description')
            ->maxLength('description', 45)
            ->allowEmpty('description');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['institution_id'], 'Institutions'));

        return $rules;
    }
}
