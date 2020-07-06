<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\ServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\ServicesTable Test Case
 */
class ServicesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\ServicesTable
     */
    public $Services;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.Services',
        'plugin.Admin.Agendas',
        'plugin.Admin.BarberServices',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Services') ? [] : ['className' => ServicesTable::class];
        $this->Services = TableRegistry::getTableLocator()->get('Services', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Services);

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
}
