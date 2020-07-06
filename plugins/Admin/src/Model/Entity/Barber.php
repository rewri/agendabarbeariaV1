<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * Barber Entity
 *
 * @property int $id
 * @property string|null $uuid
 * @property int $establishment_id
 * @property string $name
 * @property bool $available
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \Admin\Model\Entity\Establishment $establishment
 * @property \Admin\Model\Entity\Agenda[] $agendas
 * @property \Admin\Model\Entity\BarberSchedule[] $barber_schedules
 * @property \Admin\Model\Entity\BarberService[] $barber_services
 */
class Barber extends Entity
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
        'establishment_id' => true,
        'name' => true,
        'available' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'establishment' => true,
        'agendas' => true,
        'barber_schedules' => true,
        'barber_services' => true,
    ];

    protected function _setUuid($uuid)
    {
        return Text::uuid($uuid);
    }
}
