<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * EstablishmentSchedule Entity
 *
 * @property int $id
 * @property string|null $uuid
 * @property int $establishment_id
 * @property bool $sunday
 * @property \Cake\I18n\FrozenTime $sunday_start
 * @property \Cake\I18n\FrozenTime $sunday_end
 * @property \Cake\I18n\FrozenTime $sunday_pause_start
 * @property \Cake\I18n\FrozenTime $sunday_pause_end
 * @property bool $monday
 * @property \Cake\I18n\FrozenTime $monday_start
 * @property \Cake\I18n\FrozenTime $monday_end
 * @property \Cake\I18n\FrozenTime $monday_pause_start
 * @property \Cake\I18n\FrozenTime $monday_pause_end
 * @property bool $tuesday
 * @property \Cake\I18n\FrozenTime $tuesday_start
 * @property \Cake\I18n\FrozenTime $tuesday_end
 * @property \Cake\I18n\FrozenTime $tuesday_pause_start
 * @property \Cake\I18n\FrozenTime $tuesday_pause_end
 * @property bool $wednesday
 * @property \Cake\I18n\FrozenTime $wednesday_start
 * @property \Cake\I18n\FrozenTime $wednesday_end
 * @property \Cake\I18n\FrozenTime $wednesday_pause_start
 * @property \Cake\I18n\FrozenTime $wednesday_pause_end
 * @property bool $thursday
 * @property \Cake\I18n\FrozenTime $thursday_start
 * @property \Cake\I18n\FrozenTime $thursday_end
 * @property \Cake\I18n\FrozenTime $thursday_pause_start
 * @property \Cake\I18n\FrozenTime $thursday_pause_end
 * @property bool $friday
 * @property \Cake\I18n\FrozenTime $friday_start
 * @property \Cake\I18n\FrozenTime $friday_end
 * @property \Cake\I18n\FrozenTime $friday_pause_start
 * @property \Cake\I18n\FrozenTime $friday_pause_end
 * @property bool $saturday
 * @property \Cake\I18n\FrozenTime $saturday_start
 * @property \Cake\I18n\FrozenTime $saturday_end
 * @property \Cake\I18n\FrozenTime $saturday_pause_start
 * @property \Cake\I18n\FrozenTime $saturday_pause_end
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
        'uuid' => false,
        'establishment_id' => true,
        'sunday' => true,
        'sunday_start' => true,
        'sunday_end' => true,
        'sunday_pause_start' => true,
        'sunday_pause_end' => true,
        'monday' => true,
        'monday_start' => true,
        'monday_end' => true,
        'monday_pause_start' => true,
        'monday_pause_end' => true,
        'tuesday' => true,
        'tuesday_start' => true,
        'tuesday_end' => true,
        'tuesday_pause_start' => true,
        'tuesday_pause_end' => true,
        'wednesday' => true,
        'wednesday_start' => true,
        'wednesday_end' => true,
        'wednesday_pause_start' => true,
        'wednesday_pause_end' => true,
        'thursday' => true,
        'thursday_start' => true,
        'thursday_end' => true,
        'thursday_pause_start' => true,
        'thursday_pause_end' => true,
        'friday' => true,
        'friday_start' => true,
        'friday_end' => true,
        'friday_pause_start' => true,
        'friday_pause_end' => true,
        'saturday' => true,
        'saturday_start' => true,
        'saturday_end' => true,
        'saturday_pause_start' => true,
        'saturday_pause_end' => true,
        'establishment' => true,
    ];

    protected function _setUuid($uuid)
    {
        return Text::uuid($uuid);
    }
}
