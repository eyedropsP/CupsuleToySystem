<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsercardTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsercardTable Test Case
 */
class UsercardTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsercardTable
     */
    public $Usercard;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Usercard'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Usercard') ? [] : ['className' => UsercardTable::class];
        $this->Usercard = TableRegistry::getTableLocator()->get('Usercard', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usercard);

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
