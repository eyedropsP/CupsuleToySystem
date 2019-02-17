<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CardinfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CardinfoTable Test Case
 */
class CardinfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CardinfoTable
     */
    public $Cardinfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cardinfo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cardinfo') ? [] : ['className' => CardinfoTable::class];
        $this->Cardinfo = TableRegistry::getTableLocator()->get('Cardinfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cardinfo);

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
