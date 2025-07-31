<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dashboard Entity
 *
 * @property int $dashboard_id
 * @property int $package_colour_id
 * @property int $package_cover_id
 * @property int $order_id
 *
 * @property \App\Model\Entity\PackageColour $package_colour
 * @property \App\Model\Entity\PackageCover $package_cover
 * @property \App\Model\Entity\Order $order
 */
class Dashboard extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'package_colour_id' => true,
        'package_cover_id' => true,
        'order_id' => true,
        'package_colour' => true,
        'package_cover' => true,
        'order' => true,
    ];
}
