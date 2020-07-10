<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Establishments Model
 *
 * @property \Admin\Model\Table\AgendasTable&\Cake\ORM\Association\HasMany $Agendas
 * @property \Admin\Model\Table\BarbersTable&\Cake\ORM\Association\HasMany $Barbers
 * @property \Admin\Model\Table\EstablishmentSchedulesTable&\Cake\ORM\Association\HasMany $EstablishmentSchedules
 * @property &\Cake\ORM\Association\HasMany $EstablishmentServices
 *
 * @method \Admin\Model\Entity\Establishment get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Establishment newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Establishment[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Establishment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Establishment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Establishment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Establishment[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Establishment findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstablishmentsTable extends Table
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

        $this->setTable('establishments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Agendas', [
            'foreignKey' => 'establishment_id',
            'className' => 'Admin.Agendas',
        ]);
        $this->hasMany('Barbers', [
            'foreignKey' => 'establishment_id',
            'className' => 'Admin.Barbers',
        ]);
        $this->hasMany('EstablishmentSchedules', [
            'foreignKey' => 'establishment_id',
            'className' => 'Admin.EstablishmentSchedules',
        ]);
        $this->hasMany('EstablishmentServices', [
            'foreignKey' => 'establishment_id',
            'className' => 'Admin.EstablishmentServices',
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
            ->maxLength('name', 150)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('address')
            ->maxLength('address', 150)
            ->allowEmptyString('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 80)
            ->allowEmptyString('city');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 50)
            ->allowEmptyString('phone');

        $validator
            ->boolean('enabled')
            ->notEmptyString('enabled');

        return $validator;
    }
}
