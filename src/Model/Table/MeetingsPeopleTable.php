<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MeetingsPeople Model
 *
 * @property \App\Model\Table\MeetingsTable|\Cake\ORM\Association\BelongsTo $Meetings
 * @property \App\Model\Table\PeopleTable|\Cake\ORM\Association\BelongsTo $People
 *
 * @method \App\Model\Entity\MeetingsPerson get($primaryKey, $options = [])
 * @method \App\Model\Entity\MeetingsPerson newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MeetingsPerson[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MeetingsPerson|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MeetingsPerson|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MeetingsPerson patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MeetingsPerson[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MeetingsPerson findOrCreate($search, callable $callback = null, $options = [])
 */
class MeetingsPeopleTable extends Table
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

        $this->setTable('meetings_people');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id']);

        $this->belongsTo('Meetings', [
            'foreignKey' => 'meeting_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
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
            ->requirePresence('assistance', 'create')
            ->notEmpty('assistance');

        $validator
            ->integer('reason')
            ->allowEmpty('reason');

        $validator
            ->scalar('description')
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
        $rules->add($rules->existsIn(['meeting_id'], 'Meetings'));
        $rules->add($rules->existsIn(['person_id'], 'People'));

        return $rules;
    }
}
