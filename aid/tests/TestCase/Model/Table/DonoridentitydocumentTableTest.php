<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonoridentitydocumentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonoridentitydocumentTable Test Case
 */
class DonoridentitydocumentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DonoridentitydocumentTable
     */
    protected $Donoridentitydocument;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Donoridentitydocument',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Donoridentitydocument') ? [] : ['className' => DonoridentitydocumentTable::class];
        $this->Donoridentitydocument = $this->getTableLocator()->get('Donoridentitydocument', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Donoridentitydocument);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DonoridentitydocumentTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
