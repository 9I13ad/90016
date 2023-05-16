<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AiditemFixture
 */
class AiditemFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aiditem';
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
                'ItemName' => 'Lorem ipsum dolor sit amet',
                'CategoryID' => 1,
                'Quantity' => 1,
                'ExpiryDate' => '2023-05-12',
                'Ingredients' => 'Lorem ipsum dolor sit amet',
                'AllergenInfo' => 'Lorem ipsum dolor sit amet',
                'ManufacturerBrand' => 'Lorem ipsum dolor sit amet',
                'ClothingSize' => 'Lorem ipsum dolor sit amet',
                'AidKitID' => 1,
            ],
        ];
        parent::init();
    }
}
