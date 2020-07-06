<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * Agenda Entity
 *
 * @property int $id
 * @property string|null $uuid
 * @property int $user_id
 * @property int $establishment_id
 * @property int $barber_id
 * @property int $service_id
 * @property \Cake\I18n\FrozenDate $service_date
 * @property \Cake\I18n\FrozenTime $service_start
 * @property \Cake\I18n\FrozenTime $service_end
 * @property string|null $obs
 * @property bool $executed
 * @property bool $canceled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Admin\Model\Entity\User $user
 * @property \Admin\Model\Entity\Establishment $establishment
 * @property \Admin\Model\Entity\Barber $barber
 * @property \Admin\Model\Entity\Service $service
 */
class Agenda extends Entity
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
        'user_id' => true,
        'establishment_id' => true,
        'barber_id' => true,
        'service_id' => true,
        'service_date' => true,
        'service_start' => true,
        'service_end' => true,
        'obs' => true,
        'executed' => true,
        'canceled' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'establishment' => true,
        'barber' => true,
        'service' => true,
    ];

    protected function _setUuid($uuid)
    {
        return Text::uuid($uuid);
    }
}
