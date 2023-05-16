<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonationFixture
 */
class DonationFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'donation';
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
                'AidItemID' => 1,
            ],
        ];
        parent::init();
    }
}
