<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Admin Entity
 *
 * @property int $admin_id
 * @property string|null $admin_fname
 * @property string|null $admin_email
 * @property string|null $password
 * @property string|null $admin_phonenumber
 * @property int $order_id
 *
 * @property \App\Model\Entity\PackageColour $package_colour
 * @property \App\Model\Entity\PackageCover $package_cover
 * @property \App\Model\Entity\Order $order
 */
class Admin extends Entity
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
        'admin_fname' => true,
        'admin_email' => true,
        'password' => true,
        'admin_phonenumber' => true,
        'order_id' => true,
        'package_colour' => true,
        'package_cover' => true,
        'order' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
