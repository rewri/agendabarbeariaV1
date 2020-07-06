<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Roles Model
 *
 * @property \Admin\Model\Table\LoginsTable&\Cake\ORM\Association\HasMany $Logins
 *
 * @method \Admin\Model\Entity\Role get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Role newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Role[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Role|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Role saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Role patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Role[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Role findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RolesTable extends Table
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

        $this->setTable('roles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Logins', [
            'foreignKey' => 'role_id',
            'className' => 'Admin.Logins',
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
            ->scalar('role')
            ->maxLength('role', 80)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->scalar('obs')
            ->allowEmptyString('obs');

        return $validator;
    }
}
