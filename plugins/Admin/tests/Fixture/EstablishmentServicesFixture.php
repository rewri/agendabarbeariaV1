<?php
namespace Admin\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstablishmentServicesFixture
 */
class EstablishmentServicesFixture extends TestFixture
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
        'service_id' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'price' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => ''],
        'enabled' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'establishment_id' => ['type' => 'index', 'columns' => ['establishment_id'], 'length' => []],
            'service_id' => ['type' => 'index', 'columns' => ['service_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'establishment_services_ibfk_1' => ['type' => 'foreign', 'columns' => ['establishment_id'], 'references' => ['establishments', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'establishment_services_ibfk_2' => ['type' => 'foreign', 'columns' => ['service_id'], 'references' => ['services', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'service_id' => 1,
                'price' => 1.5,
                'enabled' => 1,
                'created' => '2020-07-10 11:13:22',
                'modified' => '2020-07-10 11:13:22',
            ],
        ];
        parent::init();
    }
}
