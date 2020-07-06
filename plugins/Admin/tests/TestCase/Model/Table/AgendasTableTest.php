<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\AgendasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\AgendasTable Test Case
 */
class AgendasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\AgendasTable
     */
    public $Agendas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.Agendas',
        'plugin.Admin.Users',
        'plugin.Admin.Establishments',
        'plugin.Admin.Barbers',
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
        $config = TableRegistry::getTableLocator()->exists('Agendas') ? [] : ['className' => AgendasTable::class];
        $this->Agendas = TableRegistry::getTableLocator()->get('Agendas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Agendas);

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
