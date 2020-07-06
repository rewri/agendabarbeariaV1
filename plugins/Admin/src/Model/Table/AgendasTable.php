<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agendas Model
 *
 * @property \Admin\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \Admin\Model\Table\EstablishmentsTable&\Cake\ORM\Association\BelongsTo $Establishments
 * @property \Admin\Model\Table\BarbersTable&\Cake\ORM\Association\BelongsTo $Barbers
 * @property \Admin\Model\Table\ServicesTable&\Cake\ORM\Association\BelongsTo $Services
 *
 * @method \Admin\Model\Entity\Agenda get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Agenda newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Agenda[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Agenda|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Agenda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Agenda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Agenda[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Agenda findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgendasTable extends Table
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

        $this->setTable('agendas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Users',
        ]);
        $this->belongsTo('Establishments', [
            'foreignKey' => 'establishment_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Establishments',
        ]);
        $this->belongsTo('Barbers', [
            'foreignKey' => 'barber_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Barbers',
        ]);
        $this->belongsTo('Services', [
            'foreignKey' => 'service_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Services',
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
            ->date('service_date')
            ->requirePresence('service_date', 'create')
            ->notEmptyDate('service_date');

        $validator
            ->time('service_start')
            ->requirePresence('service_start', 'create')
            ->notEmptyTime('service_start');

        $validator
            ->time('service_end')
            ->requirePresence('service_end', 'create')
            ->notEmptyTime('service_end');

        $validator
            ->scalar('obs')
            ->allowEmptyString('obs');

        $validator
            ->boolean('executed')
            ->notEmptyString('executed');

        $validator
            ->boolean('canceled')
            ->notEmptyString('canceled');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['establishment_id'], 'Establishments'));
        $rules->add($rules->existsIn(['barber_id'], 'Barbers'));
        $rules->add($rules->existsIn(['service_id'], 'Services'));

        return $rules;
    }
}
