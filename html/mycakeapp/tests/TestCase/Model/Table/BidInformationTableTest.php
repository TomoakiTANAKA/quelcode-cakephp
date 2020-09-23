<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidInformationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidInformationTable Test Case
 */
class BidInformationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BidInformationTable
     */
    public $BidInformation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BidInformation',
        'app.BidItems',
        'app.Users',
        'app.BidMessages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BidInformation') ? [] : ['className' => BidInformationTable::class];
        $this->BidInformation = TableRegistry::getTableLocator()->get('BidInformation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BidInformation);

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
