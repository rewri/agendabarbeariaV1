<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * Service Entity
 *
 * @property int $id
 * @property string|null $uuid
 * @property string $name
 * @property string|null $description
 * @property int $duration_in_minutes
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Admin\Model\Entity\Agenda[] $agendas
 * @property \Admin\Model\Entity\BarberService[] $barber_services
 */
class Service extends Entity
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
        'uuid' => false,
        'name' => true,
        'description' => true,
        'duration_in_minutes' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'agendas' => true,
        'barber_services' => true,
    ];

    protected function _setUuid($uuid)
    {
        return Text::uuid($uuid);
    }
}
