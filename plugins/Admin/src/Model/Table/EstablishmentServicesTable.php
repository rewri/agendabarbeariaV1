<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstablishmentServices Model
 *
 * @property \Admin\Model\Table\EstablishmentsTable&\Cake\ORM\Association\BelongsTo $Establishments
 * @property \Admin\Model\Table\ServicesTable&\Cake\ORM\Association\BelongsTo $Services
 *
 * @method \Admin\Model\Entity\EstablishmentService get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\EstablishmentService newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\EstablishmentService[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\EstablishmentService|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\EstablishmentService saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\EstablishmentService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\EstablishmentService[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\EstablishmentService findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstablishmentServicesTable extends Table
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

        $this->setTable('establishment_services');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Establishments', [
            'foreignKey' => 'establishment_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Establishments',
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
            ->decimal('price')
            ->notEmptyString('price');

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
        $rules->add($rules->existsIn(['service_id'], 'Services'));

        return $rules;
    }
}
