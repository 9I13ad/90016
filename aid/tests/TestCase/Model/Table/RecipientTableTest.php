<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecipientTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecipientTable Test Case
 */
class RecipientTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecipientTable
     */
    protected $Recipient;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Recipient',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Recipient') ? [] : ['className' => RecipientTable::class];
        $this->Recipient = $this->getTableLocator()->get('Recipient', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Recipient);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RecipientTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
