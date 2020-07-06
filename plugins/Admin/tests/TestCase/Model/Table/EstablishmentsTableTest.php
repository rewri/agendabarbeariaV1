<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\EstablishmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\EstablishmentsTable Test Case
 */
class EstablishmentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\EstablishmentsTable
     */
    public $Establishments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.Establishments',
        'plugin.Admin.Agendas',
        'plugin.Admin.Barbers',
        'plugin.Admin.EstablishmentSchedules',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Establishments') ? [] : ['className' => EstablishmentsTable::class];
        $this->Establishments = TableRegistry::getTableLocator()->get('Establishments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Establishments);

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
