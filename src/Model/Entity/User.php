<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $uuid
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string|null $nickname
 * @property string|null $email
 * @property string $phone
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Agenda[] $agendas
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'uuid' => true,
        'username' => true,
        'password' => true,
        'name' => true,
        'nickname' => true,
        'email' => true,
        'phone' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'agendas' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setUuid($uuid)
    {
        return Text::uuid($uuid);
    }

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
