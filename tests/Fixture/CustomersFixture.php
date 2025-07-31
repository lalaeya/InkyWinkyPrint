<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersFixture
 */
class CustomersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'cus_id' => 1,
                'cus_fname' => 'Lorem ipsum dolor sit amet',
                'cus_email' => 'Lorem ipsum dolor sit amet',
                'cus_phonenumber' => 'Lorem ipsum d',
            ],
        ];
        parent::init();
    }
}
