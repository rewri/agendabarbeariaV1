<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Services Model
 *
 * @property \Admin\Model\Table\AgendasTable&\Cake\ORM\Association\HasMany $Agendas
 * @property \Admin\Model\Table\BarberServicesTable&\Cake\ORM\Association\HasMany $BarberServices
 *
 * @method \Admin\Model\Entity\Service get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Service newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Service[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Service|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Service saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Service patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Service[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Service findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ServicesTable extends Table
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

        $this->setTable('services');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Agendas', [
            'foreignKey' => 'service_id',
            'className' => 'Admin.Agendas',
        ]);
        $this->hasMany('BarberServices', [
            'foreignKey' => 'service_id',
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
            ->scalar('name')
            ->maxLength('name', 80)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->integer('duration_in_minutes')
            ->notEmptyString('duration_in_minutes');

        $validator
            ->boolean('enabled')
            ->notEmptyString('enabled');

        return $validator;
    }
}
