<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\RolesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\RolesTable Test Case
 */
class RolesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\RolesTable
     */
    public $Roles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.Roles',
        'plugin.Admin.Logins',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Roles') ? [] : ['className' => RolesTable::class];
        $this->Roles = TableRegistry::getTableLocator()->get('Roles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Roles);

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
