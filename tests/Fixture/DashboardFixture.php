<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DashboardFixture
 */
class DashboardFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'dashboard';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'dashboard_id' => 1,
                'package_colour_id' => 1,
                'package_cover_id' => 1,
                'order_id' => 1,
            ],
        ];
        parent::init();
    }
}
