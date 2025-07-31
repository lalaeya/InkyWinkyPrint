<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Package Entity
 *
 * @property int $package_id
 * @property int $cus_id
 * @property string $package_file
 * @property int $package_cover_id
 * @property int $package_colour_id
 * @property string $package_desc
 * @property \Cake\I18n\Date $pickup_date
 * @property \Cake\I18n\Time $pickup_time
 *
 * @property \App\Model\Entity\Customer $cus
 * @property \App\Model\Entity\PackageCover $package_cover
 * @property \App\Model\Entity\PackageColour $package_colour
 */
class Package extends Entity
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
        'cus_id' => true,
        'package_file' => true,
        'package_cover_id' => true,
        'package_colour_id' => true,
        'package_desc' => true,
        'pickup_date' => true,
        'pickup_time' => true,
        'cus' => true,
        'package_cover' => true,
        'package_colour' => true,
    ];
}
