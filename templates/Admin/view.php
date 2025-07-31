<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<div class="row" style="justify-content: center; padding: 40px;">
    <!-- Side Navigation -->
    <aside class="column" style="max-width: 220px;">
        <div class="side-nav" style="background-color: #a1c9f4; padding: 30px; border-radius: 20px;">
            <h4 class="heading" style="font-family: 'Poppins', sans-serif; font-size: 1.8rem; color: #ff6f8e; font-weight: bold; text-align: center;"><?= __('Actions') ?></h4>
            <?= $this->Html->link(('Edit Admin'), ['action' => 'edit', $admin->admin_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(('Delete Admin'), ['action' => 'delete', $admin->admin_id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->admin_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(('List Admin'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(('New Admin'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="column column-80" style="max-width: 1200px; width: 100%; padding: 20px;">
        <div class="admin view content" style="background-color: #fff; padding: 50px; border-radius: 25px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
            <h3 style="font-size: 2.5rem; color: #ff6f8e; text-align: center; font-weight: bold;"><?= h($admin->admin_id) ?></h3>
            
            <!-- Table for Displaying Admin Details -->
            <table style="width: 100%; margin-top: 30px; border-collapse: collapse;">
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 15px; text-align: left;"><?= __('Admin Fname') ?></th>
                    <td style="font-size: 1.6rem; color: #333; font-weight: bold; padding: 15px; text-align: left;"><?= h($admin->admin_fname) ?></td>
                </tr>
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 15px; text-align: left;"><?= __('Admin Email') ?></th>
                    <td style="font-size: 1.6rem; color: #333; font-weight: bold; padding: 15px; text-align: left;"><?= h($admin->admin_email) ?></td>
                </tr>
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 15px; text-align: left;"><?= __('Admin Phonenumber') ?></th>
                    <td style="font-size: 1.6rem; color: #333; font-weight: bold; padding: 15px; text-align: left;"><?= h($admin->admin_phonenumber) ?></td>
                </tr>
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 15px; text-align: left;"><?= __('Order') ?></th>
                    <td style="font-size: 1.6rem; color: #333; font-weight: bold; padding: 15px; text-align: left;">
                        <?= $admin->hasValue('order') ? $this->Html->link($admin->order->order_id, ['controller' => 'Orders', 'action' => 'view', $admin->order->order_id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 15px; text-align: left;"><?= __('Package Colour') ?></th>
                    <td style="font-size: 1.6rem; color: #333; font-weight: bold; padding: 15px; text-align: left;">
                        <?= $admin->hasValue('package_colour') ? $this->Html->link($admin->package_colour->colour_types, ['controller' => 'PackageColours', 'action' => 'view', $admin->package_colour->package_colour_id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 15px; text-align: left;"><?= __('Package Cover') ?></th>
                    <td style="font-size: 1.6rem; color: #333; font-weight: bold; padding: 15px; text-align: left;">
                        <?= $admin->hasValue('package_cover') ? $this->Html->link($admin->package_cover->cover_types, ['controller' => 'PackageCovers', 'action' => 'view', $admin->package_cover->package_cover_id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 15px; text-align: left;"><?= __('Payment Method') ?></th>
                    <td style="font-size: 1.6rem; color: #333; font-weight: bold; padding: 15px; text-align: left;">
                        <?= $admin->hasValue('payment_method') ? $this->Html->link($admin->payment_method->payment_method_id, ['controller' => 'PaymentMethods', 'action' => 'view', $admin->payment_method->payment_method_id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 15px; text-align: left;"><?= __('Admin Id') ?></th>
                    <td style="font-size: 1.6rem; color: #333; font-weight: bold; padding: 15px; text-align: left;"><?= $this->Number->format($admin->admin_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Styling -->
<style>
    table {
        width: 100%;
        margin-top: 30px;
        border-collapse: collapse;
    }

    th, td {
        padding: 15px;
        text-align: left;
        font-size: 1.6rem;
    }

    th {
        background-color: #ffb6c1;
        color: white;
        font-weight: bold;
    }

    td {
        background-color: #f9f9f9;
    }

    .side-nav-item {
        display: block;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-weight: bold;
        margin: 10px 0;
        border-radius: 10px;
        background-color: #6ba9e2;
        text-align: center;
    }

    .side-nav-item:hover {
        background-color: #4f8dc3;
    }
</style>