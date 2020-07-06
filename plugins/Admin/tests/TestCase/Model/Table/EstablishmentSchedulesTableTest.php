<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\EstablishmentSchedulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\EstablishmentSchedulesTable Test Case
 */
class EstablishmentSchedulesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\EstablishmentSchedulesTable
     */
    public $EstablishmentSchedules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.EstablishmentSchedules',
        'plugin.Admin.Establishments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EstablishmentSchedules') ? [] : ['className' => EstablishmentSchedulesTable::class];
        $this->EstablishmentSchedules = TableRegistry::getTableLocator()->get('EstablishmentSchedules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstablishmentSchedules);

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
