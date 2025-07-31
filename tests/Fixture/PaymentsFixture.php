<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymentsFixture
 */
class PaymentsFixture extends TestFixture
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
                'payment_id' => 1,
                'package_id' => 1,
                'payment_amount' => 1.5,
                'payment_method_id' => 1,
            ],
        ];
        parent::init();
    }
}
