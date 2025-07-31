<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdminFixture
 */
class AdminFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'admin';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'admin_id' => 1,
                'admin_fname' => 'Lorem ipsum dolor sit amet',
                'admin_email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'admin_phonenumber' => 'Lorem ipsum d',
                'order_id' => 1,
            ],
        ];
        parent::init();
    }
}
