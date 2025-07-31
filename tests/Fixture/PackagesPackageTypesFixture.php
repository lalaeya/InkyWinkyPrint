<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PackagesPackageTypesFixture
 */
class PackagesPackageTypesFixture extends TestFixture
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
                'id' => 1,
                'package_id' => 1,
                'package_type_id' => 1,
            ],
        ];
        parent::init();
    }
}
