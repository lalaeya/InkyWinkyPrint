<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $payment_id
 * @property int $package_id
 * @property string $payment_amount
 * @property int|null $payment_method_id
 *
 * @property \App\Model\Entity\Package $package
 * @property \App\Model\Entity\PaymentMethod $payment_method
 */
class Payment extends Entity
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
        'payment_amount' => true,
        'payment_method_id' => true,
        'package' => true,
        'payment_method' => true,
    ];
}
