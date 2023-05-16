<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AidcategoryFixture
 */
class AidcategoryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aidcategory';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID' => 1,
                'CategoryName' => 'Lorem ipsum dolor sit amet',
                'InventoryStatus' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
