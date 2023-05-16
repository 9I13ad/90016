<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AidcategoryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AidcategoryTable Test Case
 */
class AidcategoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AidcategoryTable
     */
    protected $Aidcategory;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Aidcategory',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Aidcategory') ? [] : ['className' => AidcategoryTable::class];
        $this->Aidcategory = $this->getTableLocator()->get('Aidcategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Aidcategory);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AidcategoryTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
