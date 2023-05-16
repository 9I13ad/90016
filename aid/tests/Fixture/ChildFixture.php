<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChildFixture
 */
class ChildFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'child';
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
                'RecipientID' => 1,
                'Name' => 'Lorem ipsum dolor sit amet',
                'Age' => 1,
            ],
        ];
        parent::init();
    }
}
