<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * BarberService Entity
 *
 * @property int $id
 * @property string|null $uuid
 * @property int $barber_id
 * @property int $service_id
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Admin\Model\Entity\Barber $barber
 * @property \Admin\Model\Entity\Service $service
 */
class BarberService extends Entity
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
        'barber_id' => true,
        'service_id' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'barber' => true,
        'service' => true,
    ];

    protected function _setUuid($uuid)
    {
        return Text::uuid($uuid);
    }
}
