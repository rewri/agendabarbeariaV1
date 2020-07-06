<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgendasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgendasTable Test Case
 */
class AgendasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AgendasTable
     */
    public $Agendas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Agendas',
        'app.Users',
        'app.Establishments',
        'app.Barbers',
        'app.Services',
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
