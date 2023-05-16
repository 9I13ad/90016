<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecipientFixture
 */
class RecipientFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'recipient';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'Age' => 1,
                'PreviousAddress' => 'Lorem ipsum dolor sit amet',
                'TotalFamilyMembers' => 1,
                'Nationality' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
