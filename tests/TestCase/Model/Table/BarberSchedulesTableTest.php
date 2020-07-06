<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BarberSchedulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BarberSchedulesTable Test Case
 */
class BarberSchedulesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BarberSchedulesTable
     */
    public $BarberSchedules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BarberSchedules',
        'app.Barbers',
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
