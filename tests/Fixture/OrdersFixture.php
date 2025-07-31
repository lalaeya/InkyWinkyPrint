<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
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
                'order_id' => 1,
                'package_id' => 1,
                'cus_id' => 1,
                'pickup_time' => '15:31:12',
                'pickup_date' => '2025-07-22',
                'order_date' => '2025-07-22',
                'order_status' => 'Lorem ipsum dolor ',
                'pickup_status' => 'Lorem ipsum dolor ',
                'created_at' => '2025-07-22 15:31:12',
            ],
        ];
        parent::init();
    }
}
