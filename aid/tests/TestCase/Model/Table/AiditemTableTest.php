<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AiditemTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AiditemTable Test Case
 */
class AiditemTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AiditemTable
     */
    protected $Aiditem;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Aiditem',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Aiditem') ? [] : ['className' => AiditemTable::class];
        $this->Aiditem = $this->getTableLocator()->get('Aiditem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Aiditem);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AiditemTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
