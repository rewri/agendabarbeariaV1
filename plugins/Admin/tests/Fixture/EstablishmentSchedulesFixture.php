<?php
namespace Admin\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstablishmentSchedulesFixture
 */
class EstablishmentSchedulesFixture extends TestFixture
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
        'establishment_id' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
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
            'establishment_id' => ['type' => 'index', 'columns' => ['establishment_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'establishment_schedules_ibfk_1' => ['type' => 'foreign', 'columns' => ['establishment_id'], 'references' => ['establishments', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'establishment_id' => 1,
                'sunday' => 1,
                'sunday_start' => '11:09:31',
                'sunday_end' => '11:09:31',
                'sunday_pause_start' => '11:09:31',
                'sunday_pause_end' => '11:09:31',
                'monday' => 1,
                'monday_start' => '11:09:31',
                'monday_end' => '11:09:31',
                'monday_pause_start' => '11:09:31',
                'monday_pause_end' => '11:09:31',
                'tuesday' => 1,
                'tuesday_start' => '11:09:31',
                'tuesday_end' => '11:09:31',
                'tuesday_pause_start' => '11:09:31',
                'tuesday_pause_end' => '11:09:31',
                'wednesday' => 1,
                'wednesday_start' => '11:09:31',
                'wednesday_end' => '11:09:31',
                'wednesday_pause_start' => '11:09:31',
                'wednesday_pause_end' => '11:09:31',
                'thursday' => 1,
                'thursday_start' => '11:09:31',
                'thursday_end' => '11:09:31',
                'thursday_pause_start' => '11:09:31',
                'thursday_pause_end' => '11:09:31',
                'friday' => 1,
                'friday_start' => '11:09:31',
                'friday_end' => '11:09:31',
                'friday_pause_start' => '11:09:31',
                'friday_pause_end' => '11:09:31',
                'saturday' => 1,
                'saturday_start' => '11:09:31',
                'saturday_end' => '11:09:31',
                'saturday_pause_start' => '11:09:31',
                'saturday_pause_end' => '11:09:31',
            ],
        ];
        parent::init();
    }
}
