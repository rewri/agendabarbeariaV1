<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\BarberSchedulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\BarberSchedulesTable Test Case
 */
class BarberSchedulesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\BarberSchedulesTable
     */
    public $BarberSchedules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.BarberSchedules',
        'plugin.Admin.Barbers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BarberSchedules') ? [] : ['className' => BarberSchedulesTable::class];
        $this->BarberSchedules = TableRegistry::getTableLocator()->get('BarberSchedules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BarberSchedules);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
