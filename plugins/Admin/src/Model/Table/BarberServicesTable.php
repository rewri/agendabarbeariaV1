<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BarberServices Model
 *
 * @property \Admin\Model\Table\BarbersTable&\Cake\ORM\Association\BelongsTo $Barbers
 * @property \Admin\Model\Table\ServicesTable&\Cake\ORM\Association\BelongsTo $Services
 *
 * @method \Admin\Model\Entity\BarberService get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\BarberService newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\BarberService[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\BarberService|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\BarberService saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\BarberService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\BarberService[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\BarberService findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BarberServicesTable extends Table
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

        $this->setTable('barber_services');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
        $rules->add($rules->existsIn(['barber_id'], 'Barbers'));
        $rules->add($rules->existsIn(['service_id'], 'Services'));

        return $rules;
    }
}
