<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidItemsTable Test Case
 */
class BidItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BidItemsTable
     */
    public $BidItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BidItems',
        'app.Users',
        'app.BidInformation',
        'app.BidRequests',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BidItems') ? [] : ['className' => BidItemsTable::class];
        $this->BidItems = TableRegistry::getTableLocator()->get('BidItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BidItems);

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
