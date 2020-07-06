<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BarberServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BarberServicesTable Test Case
 */
class BarberServicesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BarberServicesTable
     */
    public $BarberServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BarberServices',
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
        $config = TableRegistry::getTableLocator()->exists('BarberServices') ? [] : ['className' => BarberServicesTable::class];
        $this->BarberServices = TableRegistry::getTableLocator()->get('BarberServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BarberServices);

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
