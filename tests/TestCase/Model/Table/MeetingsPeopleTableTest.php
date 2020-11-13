<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MeetingsPeopleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MeetingsPeopleTable Test Case
 */
class MeetingsPeopleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MeetingsPeopleTable
     */
    public $MeetingsPeople;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.meetings_people',
        'app.meetings',
        'app.people'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MeetingsPeople') ? [] : ['className' => MeetingsPeopleTable::class];
        $this->MeetingsPeople = TableRegistry::getTableLocator()->get('MeetingsPeople', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MeetingsPeople);

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
