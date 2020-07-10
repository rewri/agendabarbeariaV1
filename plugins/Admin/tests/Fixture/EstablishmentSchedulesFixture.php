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
        'weekday' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'open' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'start_time' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => '09:00:00', 'comment' => '', 'precision' => null],
        'end_time' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => '18:45:00', 'comment' => '', 'precision' => null],
        'lunch_time' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => '12:00:00', 'comment' => '', 'precision' => null],
        'lunch_length' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '60', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
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
                'weekday' => 1,
                'open' => 1,
                'start_time' => '11:11:45',
                'end_time' => '11:11:45',
                'lunch_time' => '11:11:45',
                'lunch_length' => 1,
            ],
        ];
        parent::init();
    }
}
