<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $order_id
 * @property int|null $package_id
 * @property int $cus_id
 * @property \Cake\I18n\Time $pickup_time
 * @property \Cake\I18n\Date $pickup_date
 * @property \Cake\I18n\Date $order_date
 * @property string $order_status
 * @property string|null $pickup_status
 * @property \Cake\I18n\DateTime|null $created_at
 *
 * @property \App\Model\Entity\Package $package
 * @property \App\Model\Entity\Cus $cus
 * @property \App\Model\Entity\Payment $payment
 */
class Order extends Entity
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
        'cus_id' => true,
        'pickup_time' => true,
        'pickup_date' => true,
        'order_date' => true,
        'order_status' => true,
        'pickup_status' => true,
        'created_at' => true,
        'package' => true,
        'cus' => true,
        'payment' => true,
    ];
}
