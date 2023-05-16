<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartnerTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartnerTable Test Case
 */
class PartnerTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PartnerTable
     */
    protected $Partner;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Partner',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Partner') ? [] : ['className' => PartnerTable::class];
        $this->Partner = $this->getTableLocator()->get('Partner', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Partner);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PartnerTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
