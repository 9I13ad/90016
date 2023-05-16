<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChildTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChildTable Test Case
 */
class ChildTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChildTable
     */
    protected $Child;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Child',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Child') ? [] : ['className' => ChildTable::class];
        $this->Child = $this->getTableLocator()->get('Child', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Child);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChildTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
