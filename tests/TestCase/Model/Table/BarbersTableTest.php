<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BarbersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BarbersTable Test Case
 */
class BarbersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BarbersTable
     */
    public $Barbers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Barbers',
        'app.Establishments',
        'app.Agendas',
        'app.BarberSchedules',
        'app.BarberServices',
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
