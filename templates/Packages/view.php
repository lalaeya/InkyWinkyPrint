<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Package $package
 */
?>

<!-- CSS BLOCK -->
<style>
    .container-flex {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .layout-flex {
        display: flex;
        gap: 30px;
        align-items: flex-start;
        max-width: 1200px;
        width: 100%;
    }

    .side-column {
        flex: 0 0 200px;
    }

    .side-nav-custom {
        background: linear-gradient(to bottom right, #ffccdc, #d5b8ff);
        padding: 20px;
        border-radius: 15px;
        width: 100%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .side-nav-custom h4 {
        font-size: 1.6rem;
        color: #ff6f8e;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    .side-nav-item-custom {
        display: block;
        margin: 10px 0;
        font-weight: bold;
        text-decoration: none;
        color: white;
        background-color: #ff859fff;
        padding: 12px 20px;
        border-radius: 12px;
        text-align: center;
        transition: background-color 0.3s;
    }

    .side-nav-item-custom:hover {
        background-color: #fcc3edff;
    }

    .main-column {
        flex: 1;
    }

    .content-card {
        background-color: #ffffffff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .send-email-btn {
        display: inline-block;
        background-color: #ff859fff;
        color: white;
        padding: 9px 20px;
        border-radius: 12px;
        font-weight: bold;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
        text-align: center;
    }

    .send-email-btn:hover {
        background-color: #fcc3f7ff;
    }

    .home-link {
        display: inline-block;
        margin-top: 20px;
        font-weight: bold;
        text-decoration: none;
        color: white;
        background-color: #ff859fff;
        padding: 12px 20px;
        border-radius: 12px;
        text-align: center;
        transition: background-color 0.3s;
    }

    .home-link:hover {
        background-color: #fcc3f7ff;
    }
</style>

<!-- HTML START -->
<div class="container-flex">
    <div class="layout-flex">
        
        <!-- Sidebar -->
        <aside class="side-column">
            <div class="side-nav-custom">
                <h4><?= __('Actions') ?></h4>
                <div style="text-align: center;">
                    <?= $this->Html->link('Edit Package', ['action' => 'edit', $package->package_id], [
                        'class' => 'side-nav-item-custom'
                    ]) ?>

                    <?= $this->Form->postLink('Delete Package', ['action' => 'delete', $package->package_id], [
                        'confirm' => __('Are you sure you want to delete # {0}?', $package->package_id),
                        'class' => 'side-nav-item-custom'
                    ]) ?>
                </div>
            </div>
        </aside>

        <!-- Main content -->
        <div class="main-column">
            <div class="packages view content content-card">
                <h3>Order ID : <?= h($package->package_id) ?></h3>

                <div style="text-align: right; margin-bottom: 20px;">
                    <?= $this->Form->postLink('Send Email', [
                        'controller' => 'Packages',
                        'action' => 'sendEmail',
                        $package->package_id 
                    ], [
                        'confirm' => 'Send order details to your email?',
                        'class' => 'send-email-btn'
                    ]) ?>
                </div>

                <h5><b><?= __('Order Details') ?></b></h5>
                <table>
                    <tr>
                        <th><?= __('Uploaded File') ?></th>
                        <td>
                            <?php if (!empty($package->package_file)) : ?>
                                <?= $this->Html->link(
                                    $package->package_file,
                                    '/files/packages/' . h($package->package_file),
                                    ['target' => '_blank']
                                ) ?>
                            <?php else : ?>
                                No file uploaded
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th><?= __('Package Cover') ?></th>
                        <td><?= $package->hasValue('package_cover') ? $this->Html->link($package->package_cover->cover_types, ['controller' => 'PackageCovers', 'action' => 'view', $package->package_cover->package_cover_id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Package Colour') ?></th>
                        <td><?= $package->hasValue('package_colour') ? $this->Html->link($package->package_colour->colour_types, ['controller' => 'PackageColours', 'action' => 'view', $package->package_colour->package_colour_id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Notes') ?></th>
                        <td><?= h($package->package_desc) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Package Id') ?></th>
                        <td><?= $this->Number->format($package->package_id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Pickup Date') ?></th>
                        <td><?= h($package->pickup_date) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Pickup Time') ?></th>
                        <td><?= h($package->pickup_time) ?></td>
                    </tr>
                </table>

                <?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => 'home'], [
                    'class' => 'home-link'
                ]) ?>
            </div>
        </div>
    </div>
</div>
