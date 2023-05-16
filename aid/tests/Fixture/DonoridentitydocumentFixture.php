<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonoridentitydocumentFixture
 */
class DonoridentitydocumentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'donoridentitydocument';
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
                'DonorID' => 1,
                'DocumentType' => 'Lorem ipsum dolor sit amet',
                'DocumentNumber' => 'Lorem ipsum dolor sit amet',
                'ExpiryDate' => '2023-05-12',
            ],
        ];
        parent::init();
    }
}
