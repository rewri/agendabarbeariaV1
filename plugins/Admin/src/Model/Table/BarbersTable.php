<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Barbers Model
 *
 * @property \Admin\Model\Table\EstablishmentsTable&\Cake\ORM\Association\BelongsTo $Establishments
 * @property \Admin\Model\Table\AgendasTable&\Cake\ORM\Association\HasMany $Agendas
 * @property \Admin\Model\Table\BarberSchedulesTable&\Cake\ORM\Association\HasMany $BarberSchedules
 * @property \Admin\Model\Table\BarberServicesTable&\Cake\ORM\Association\HasMany $BarberServices
 *
 * @method \Admin\Model\Entity\Barber get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Barber newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Barber[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Barber|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Barber saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Barber patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Barber[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Barber findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BarbersTable extends Table
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

        $this->setTable('barbers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Establishments', [
            'foreignKey' => 'establishment_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Establishments',
        ]);
        $this->hasMany('Agendas', [
            'foreignKey' => 'barber_id',
            'className' => 'Admin.Agendas',
        ]);
        $this->hasMany('BarberSchedules', [
            'foreignKey' => 'barber_id',
            'className' => 'Admin.BarberSchedules',
        ]);
        $this->hasMany('BarberServices', [
            'foreignKey' => 'barber_id',
            'className' => 'Admin.BarberServices',
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
            ->scalar('name')
            ->maxLength('name', 80)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->boolean('available')
            ->notEmptyString('available');

        $validator
            ->boolean('enabled')
            ->notEmptyString('enabled');

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
