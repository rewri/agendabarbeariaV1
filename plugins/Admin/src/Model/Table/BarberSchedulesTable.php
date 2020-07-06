<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BarberSchedules Model
 *
 * @property \Admin\Model\Table\BarbersTable&\Cake\ORM\Association\BelongsTo $Barbers
 *
 * @method \Admin\Model\Entity\BarberSchedule get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\BarberSchedule newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\BarberSchedule[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\BarberSchedule|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\BarberSchedule saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\BarberSchedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\BarberSchedule[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\BarberSchedule findOrCreate($search, callable $callback = null, $options = [])
 */
class BarberSchedulesTable extends Table
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

        $this->setTable('barber_schedules');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Barbers', [
            'foreignKey' => 'barber_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Barbers',
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
            ->boolean('sunday')
            ->notEmptyString('sunday');

        $validator
            ->time('sunday_start')
            ->notEmptyTime('sunday_start');

        $validator
            ->time('sunday_end')
            ->notEmptyTime('sunday_end');

        $validator
            ->time('sunday_pause_start')
            ->notEmptyTime('sunday_pause_start');

        $validator
            ->time('sunday_pause_end')
            ->notEmptyTime('sunday_pause_end');

        $validator
            ->boolean('monday')
            ->notEmptyString('monday');

        $validator
            ->time('monday_start')
            ->notEmptyTime('monday_start');

        $validator
            ->time('monday_end')
            ->notEmptyTime('monday_end');

        $validator
            ->time('monday_pause_start')
            ->notEmptyTime('monday_pause_start');

        $validator
            ->time('monday_pause_end')
            ->notEmptyTime('monday_pause_end');

        $validator
            ->boolean('tuesday')
            ->notEmptyString('tuesday');

        $validator
            ->time('tuesday_start')
            ->notEmptyTime('tuesday_start');

        $validator
            ->time('tuesday_end')
            ->notEmptyTime('tuesday_end');

        $validator
            ->time('tuesday_pause_start')
            ->notEmptyTime('tuesday_pause_start');

        $validator
            ->time('tuesday_pause_end')
            ->notEmptyTime('tuesday_pause_end');

        $validator
            ->boolean('wednesday')
            ->notEmptyString('wednesday');

        $validator
            ->time('wednesday_start')
            ->notEmptyTime('wednesday_start');

        $validator
            ->time('wednesday_end')
            ->notEmptyTime('wednesday_end');

        $validator
            ->time('wednesday_pause_start')
            ->notEmptyTime('wednesday_pause_start');

        $validator
            ->time('wednesday_pause_end')
            ->notEmptyTime('wednesday_pause_end');

        $validator
            ->boolean('thursday')
            ->notEmptyString('thursday');

        $validator
            ->time('thursday_start')
            ->notEmptyTime('thursday_start');

        $validator
            ->time('thursday_end')
            ->notEmptyTime('thursday_end');

        $validator
            ->time('thursday_pause_start')
            ->notEmptyTime('thursday_pause_start');

        $validator
            ->time('thursday_pause_end')
            ->notEmptyTime('thursday_pause_end');

        $validator
            ->boolean('friday')
            ->notEmptyString('friday');

        $validator
            ->time('friday_start')
            ->notEmptyTime('friday_start');

        $validator
            ->time('friday_end')
            ->notEmptyTime('friday_end');

        $validator
            ->time('friday_pause_start')
            ->notEmptyTime('friday_pause_start');

        $validator
            ->time('friday_pause_end')
            ->notEmptyTime('friday_pause_end');

        $validator
            ->boolean('saturday')
            ->notEmptyString('saturday');

        $validator
            ->time('saturday_start')
            ->notEmptyTime('saturday_start');

        $validator
            ->time('saturday_end')
            ->notEmptyTime('saturday_end');

        $validator
            ->time('saturday_pause_start')
            ->notEmptyTime('saturday_pause_start');

        $validator
            ->time('saturday_pause_end')
            ->notEmptyTime('saturday_pause_end');

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
        $rules->add($rules->existsIn(['barber_id'], 'Barbers'));

        return $rules;
    }
}
