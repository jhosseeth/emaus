<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Details Model
 *
 * @property \App\Model\Table\InstitutionsTable|\Cake\ORM\Association\BelongsTo $Institutions
 *
 * @method \App\Model\Entity\Detail get($primaryKey, $options = [])
 * @method \App\Model\Entity\Detail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Detail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Detail|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Detail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Detail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detail findOrCreate($search, callable $callback = null, $options = [])
 */
class DetailsTable extends Table
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

        $this->setTable('details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->scalar('departament')
            ->maxLength('departament', 45)
            ->requirePresence('departament', 'create')
            ->notEmpty('departament');

        $validator
            ->scalar('city')
            ->maxLength('city', 45)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('neighborhood')
            ->maxLength('neighborhood', 45)
            ->requirePresence('neighborhood', 'create')
            ->notEmpty('neighborhood');

        $validator
            ->scalar('address')
            ->maxLength('address', 45)
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 45)
            ->requirePresence('telephone', 'create')
            ->notEmpty('telephone');

        $validator
            ->email('email')
            ->allowEmpty('email');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['institution_id'], 'Institutions'));

        return $rules;
    }
}
