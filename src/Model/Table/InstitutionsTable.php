<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Institutions Model
 *
 * @property \App\Model\Table\DetailsTable|\Cake\ORM\Association\HasMany $Details
 * @property \App\Model\Table\MeetingsTable|\Cake\ORM\Association\HasMany $Meetings
 * @property \App\Model\Table\PeopleTable|\Cake\ORM\Association\BelongsToMany $People
 *
 * @method \App\Model\Entity\Institution get($primaryKey, $options = [])
 * @method \App\Model\Entity\Institution newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Institution[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Institution|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Institution|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Institution patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Institution[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Institution findOrCreate($search, callable $callback = null, $options = [])
 */
class InstitutionsTable extends Table
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

        $this->setTable('institutions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Details', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('Meetings', [
            'foreignKey' => 'institution_id'
        ]);
        $this->belongsToMany('People', [
            'foreignKey' => 'institution_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'institutions_people'
        ]);
        $this->belongsTo('Parent', [
            'className' => 'Institutions',
            'foreignKey' => 'parent_id',
            'joinType' => 'LEFT'
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
            ->allowEmpty('name');

        $validator
            ->scalar('type')
            ->maxLength('type', 45)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        return $validator;
    }
}
