<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * Establishment Entity
 *
 * @property int $id
 * @property string|null $uuid
 * @property string $name
 * @property string|null $description
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Admin\Model\Entity\Agenda[] $agendas
 * @property \Admin\Model\Entity\Barber[] $barbers
 * @property \Admin\Model\Entity\EstablishmentSchedule[] $establishment_schedules
 */
class Establishment extends Entity
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
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'agendas' => true,
        'barbers' => true,
        'establishment_schedules' => true,
    ];

    protected function _setUuid($uuid)
    {
        return Text::uuid($uuid);
    }
}
