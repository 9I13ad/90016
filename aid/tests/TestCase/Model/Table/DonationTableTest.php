<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonationTable Test Case
 */
class DonationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DonationTable
     */
    protected $Donation;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Donation',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Donation') ? [] : ['className' => DonationTable::class];
        $this->Donation = $this->getTableLocator()->get('Donation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Donation);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DonationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
