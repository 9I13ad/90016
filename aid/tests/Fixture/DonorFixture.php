<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonorFixture
 */
class DonorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'donor';
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
                'Name' => 'Lorem ipsum dolor sit amet',
                'Age' => 1,
                'MailingAddress' => 'Lorem ipsum dolor sit amet',
                'PhoneNumber' => 'Lorem ipsum dolor ',
                'Email' => 'Lorem ipsum dolor sit amet',
                'PreferredModeOfCommunication' => 'Lorem ipsum dolor sit amet',
                'Nationality' => 'Lorem ipsum dolor sit amet',
                'ABN' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
