<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PackageColoursFixture
 */
class PackageColoursFixture extends TestFixture
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
                'package_colour_id' => 1,
                'colour_types' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
