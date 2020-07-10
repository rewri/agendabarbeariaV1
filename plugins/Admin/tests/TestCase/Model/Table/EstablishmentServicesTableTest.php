<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\EstablishmentServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\EstablishmentServicesTable Test Case
 */
class EstablishmentServicesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\EstablishmentServicesTable
     */
    public $EstablishmentServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.EstablishmentServices',
        'plugin.Admin.Establishments',
        'plugin.Admin.Services',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EstablishmentServices') ? [] : ['className' => EstablishmentServicesTable::class];
        $this->EstablishmentServices = TableRegistry::getTableLocator()->get('EstablishmentServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstablishmentServices);

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
