<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * EstablishmentSchedule Entity
 *
 * @property int $id
 * @property string|null $uuid
 * @property int $establishment_id
 * @property int $weekday
 * @property bool $open
 * @property \Cake\I18n\FrozenTime|null $start_time
 * @property \Cake\I18n\FrozenTime|null $end_time
 * @property \Cake\I18n\FrozenTime|null $lunch_time
 * @property int|null $lunch_length
 *
 * @property \Admin\Model\Entity\Establishment $establishment
 */
class EstablishmentSchedule extends Entity
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
        'establishment_id' => true,
        'weekday' => true,
        'open' => true,
        'start_time' => true,
        'end_time' => true,
        'lunch_time' => true,
        'lunch_length' => true,
        'establishment' => true,
    ];
}
