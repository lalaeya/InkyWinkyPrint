<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Email Entity
 *
 * @property int $email_id
 * @property int $customer_id
 * @property int|null $package_id
 * @property string|null $subject
 * @property string|null $message
 * @property string|null $status
 * @property \Cake\I18n\DateTime|null $sent_at
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Package $package
 */
class Email extends Entity
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
        'customer_id' => true,
        'package_id' => true,
        'subject' => true,
        'message' => true,
        'status' => true,
        'sent_at' => true,
        'customer' => true,
        'package' => true,
    ];
}
