<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonorTable Test Case
 */
class DonorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DonorTable
     */
    protected $Donor;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Donor',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Donor') ? [] : ['className' => DonorTable::class];
        $this->Donor = $this->getTableLocator()->get('Donor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Donor);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DonorTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
