<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AidkitTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AidkitTable Test Case
 */
class AidkitTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AidkitTable
     */
    protected $Aidkit;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Aidkit',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Aidkit') ? [] : ['className' => AidkitTable::class];
        $this->Aidkit = $this->getTableLocator()->get('Aidkit', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Aidkit);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AidkitTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
