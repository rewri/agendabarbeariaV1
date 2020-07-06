<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BarberSchedulesFixture
 */
class BarberSchedulesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'uuid' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'barber_id' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sunday' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'sunday_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '09:00:00', 'comment' => '', 'precision' => null],
        'sunday_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '18:45:00', 'comment' => '', 'precision' => null],
        'sunday_pause_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '12:00:00', 'comment' => '', 'precision' => null],
        'sunday_pause_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '13:00:00', 'comment' => '', 'precision' => null],
        'monday' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'monday_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '09:00:00', 'comment' => '', 'precision' => null],
        'monday_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '18:45:00', 'comment' => '', 'precision' => null],
        'monday_pause_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '12:00:00', 'comment' => '', 'precision' => null],
        'monday_pause_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '13:00:00', 'comment' => '', 'precision' => null],
        'tuesday' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'tuesday_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '09:00:00', 'comment' => '', 'precision' => null],
        'tuesday_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '18:45:00', 'comment' => '', 'precision' => null],
        'tuesday_pause_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '12:00:00', 'comment' => '', 'precision' => null],
        'tuesday_pause_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '13:00:00', 'comment' => '', 'precision' => null],
        'wednesday' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'wednesday_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '09:00:00', 'comment' => '', 'precision' => null],
        'wednesday_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '18:45:00', 'comment' => '', 'precision' => null],
        'wednesday_pause_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '12:00:00', 'comment' => '', 'precision' => null],
        'wednesday_pause_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '13:00:00', 'comment' => '', 'precision' => null],
        'thursday' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'thursday_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '09:00:00', 'comment' => '', 'precision' => null],
        'thursday_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '18:45:00', 'comment' => '', 'precision' => null],
        'thursday_pause_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '12:00:00', 'comment' => '', 'precision' => null],
        'thursday_pause_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '13:00:00', 'comment' => '', 'precision' => null],
        'friday' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'friday_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '09:00:00', 'comment' => '', 'precision' => null],
        'friday_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '18:45:00', 'comment' => '', 'precision' => null],
        'friday_pause_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '12:00:00', 'comment' => '', 'precision' => null],
        'friday_pause_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '13:00:00', 'comment' => '', 'precision' => null],
        'saturday' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'saturday_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '09:00:00', 'comment' => '', 'precision' => null],
        'saturday_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '18:45:00', 'comment' => '', 'precision' => null],
        'saturday_pause_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '12:00:00', 'comment' => '', 'precision' => null],
        'saturday_pause_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => '13:00:00', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'barber_id' => ['type' => 'index', 'columns' => ['barber_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'barber_schedules_ibfk_1' => ['type' => 'foreign', 'columns' => ['barber_id'], 'references' => ['barbers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'uuid' => 'Lorem ipsum dolor sit amet',
                'barber_id' => 1,
                'sunday' => 1,
                'sunday_start' => '10:37:49',
                'sunday_end' => '10:37:49',
                'sunday_pause_start' => '10:37:49',
                'sunday_pause_end' => '10:37:49',
                'monday' => 1,
                'monday_start' => '10:37:49',
                'monday_end' => '10:37:49',
                'monday_pause_start' => '10:37:49',
                'monday_pause_end' => '10:37:49',
                'tuesday' => 1,
                'tuesday_start' => '10:37:49',
                'tuesday_end' => '10:37:49',
                'tuesday_pause_start' => '10:37:49',
                'tuesday_pause_end' => '10:37:49',
                'wednesday' => 1,
                'wednesday_start' => '10:37:49',
                'wednesday_end' => '10:37:49',
                'wednesday_pause_start' => '10:37:49',
                'wednesday_pause_end' => '10:37:49',
                'thursday' => 1,
                'thursday_start' => '10:37:49',
                'thursday_end' => '10:37:49',
                'thursday_pause_start' => '10:37:49',
                'thursday_pause_end' => '10:37:49',
                'friday' => 1,
                'friday_start' => '10:37:49',
                'friday_end' => '10:37:49',
                'friday_pause_start' => '10:37:49',
                'friday_pause_end' => '10:37:49',
                'saturday' => 1,
                'saturday_start' => '10:37:49',
                'saturday_end' => '10:37:49',
                'saturday_pause_start' => '10:37:49',
                'saturday_pause_end' => '10:37:49',
            ],
        ];
        parent::init();
    }
}
