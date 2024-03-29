<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstablishmentSchedules Model
 *
 * @property \Admin\Model\Table\EstablishmentsTable&\Cake\ORM\Association\BelongsTo $Establishments
 *
 * @method \Admin\Model\Entity\EstablishmentSchedule get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\EstablishmentSchedule newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\EstablishmentSchedule[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\EstablishmentSchedule|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\EstablishmentSchedule saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\EstablishmentSchedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\EstablishmentSchedule[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\EstablishmentSchedule findOrCreate($search, callable $callback = null, $options = [])
 */
class EstablishmentSchedulesTable extends Table
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

        $this->setTable('establishment_schedules');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Establishments', [
            'foreignKey' => 'establishment_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Establishments',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('uuid')
            ->maxLength('uuid', 255)
            ->allowEmptyString('uuid');

        $validator
            ->integer('weekday')
            ->notEmptyString('weekday');

        $validator
            ->boolean('open')
            ->notEmptyString('open');

        $validator
            ->time('start_time')
            ->allowEmptyTime('start_time');

        $validator
            ->time('end_time')
            ->allowEmptyTime('end_time');

        $validator
            ->time('lunch_time')
            ->allowEmptyTime('lunch_time');

        $validator
            ->integer('lunch_length')
            ->allowEmptyString('lunch_length');

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
        $rules->add($rules->existsIn(['establishment_id'], 'Establishments'));

        return $rules;
    }
}
