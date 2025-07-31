<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PackageTypesFixture
 */
class PackageTypesFixture extends TestFixture
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
                'package_type_id' => 1,
                'package_type' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
