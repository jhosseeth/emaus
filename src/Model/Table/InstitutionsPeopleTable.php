<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InstitutionsPeople Model
 *
 * @property \App\Model\Table\PeopleTable|\Cake\ORM\Association\BelongsTo $People
 * @property \App\Model\Table\InstitutionsTable|\Cake\ORM\Association\BelongsTo $Institutions
 *
 * @method \App\Model\Entity\InstitutionsPerson get($primaryKey, $options = [])
 * @method \App\Model\Entity\InstitutionsPerson newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InstitutionsPerson[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InstitutionsPerson|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InstitutionsPerson|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InstitutionsPerson patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InstitutionsPerson[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InstitutionsPerson findOrCreate($search, callable $callback = null, $options = [])
 */
class InstitutionsPeopleTable extends Table
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

        $this->setTable('institutions_people');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id']);

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
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
            ->date('start')
            ->requirePresence('start', 'create')
            ->notEmpty('start');

        $validator
            ->date('end')
            ->allowEmpty('end');

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
        $rules->add($rules->existsIn(['person_id'], 'People'));
        $rules->add($rules->existsIn(['institution_id'], 'Institutions'));

        return $rules;
    }
}
