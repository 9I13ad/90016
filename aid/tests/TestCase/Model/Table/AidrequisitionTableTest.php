<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AidrequisitionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AidrequisitionTable Test Case
 */
class AidrequisitionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AidrequisitionTable
     */
    protected $Aidrequisition;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Aidrequisition',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Aidrequisition') ? [] : ['className' => AidrequisitionTable::class];
        $this->Aidrequisition = $this->getTableLocator()->get('Aidrequisition', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Aidrequisition);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AidrequisitionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
