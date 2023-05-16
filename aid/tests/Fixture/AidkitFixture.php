<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AidkitFixture
 */
class AidkitFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aidkit';
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
                'KitName' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
