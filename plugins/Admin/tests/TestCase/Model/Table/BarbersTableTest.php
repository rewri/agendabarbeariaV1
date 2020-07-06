<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\BarbersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\BarbersTable Test Case
 */
class BarbersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\BarbersTable
     */
    public $Barbers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.Barbers',
        'plugin.Admin.Establishments',
        'plugin.Admin.Agendas',
        'plugin.Admin.BarberSchedules',
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
        $config = TableRegistry::getTableLocator()->exists('Barbers') ? [] : ['className' => BarbersTable::class];
        $this->Barbers = TableRegistry::getTableLocator()->get('Barbers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Barbers);

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
