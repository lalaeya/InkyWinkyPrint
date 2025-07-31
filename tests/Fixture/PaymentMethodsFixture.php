<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymentMethodsFixture
 */
class PaymentMethodsFixture extends TestFixture
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
                'payment_method_id' => 1,
                'payment_types' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
