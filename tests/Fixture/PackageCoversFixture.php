<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PackageCoversFixture
 */
class PackageCoversFixture extends TestFixture
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
                'package_cover_id' => 1,
                'cover_types' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
