<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PackagesFixture
 */
class PackagesFixture extends TestFixture
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
                'package_id' => 1,
                'cus_id' => 1,
                'package_file' => 'Lorem ipsum dolor sit amet',
                'package_cover_id' => 1,
                'package_colour_id' => 1,
                'package_desc' => 'Lorem ipsum dolor sit amet',
                'pickup_date' => '2025-07-21',
                'pickup_time' => '05:51:49',
            ],
        ];
        parent::init();
    }
}
