<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PackagesPackageType Entity
 *
 * @property int $id
 * @property int|null $package_id
 * @property int|null $package_type_id
 *
 * @property \App\Model\Entity\Package $package
 * @property \App\Model\Entity\PackageType $package_type
 */
class PackagesPackageType extends Entity
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
        'package_id' => true,
        'package_type_id' => true,
        'package' => true,
        'package_type' => true,
    ];
}
