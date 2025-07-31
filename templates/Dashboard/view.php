<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dashboard $dashboard
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dashboard'), ['action' => 'edit', $dashboard->dashboard_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dashboard'), ['action' => 'delete', $dashboard->dashboard_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dashboard->dashboard_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dashboard'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dashboard'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="dashboard view content">
            <h3><?= h($dashboard->dashboard_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Package Colour') ?></th>
                    <td><?= $dashboard->hasValue('package_colour') ? $this->Html->link($dashboard->package_colour->colour_types, ['controller' => 'PackageColours', 'action' => 'view', $dashboard->package_colour->package_colour_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Package Cover') ?></th>
                    <td><?= $dashboard->hasValue('package_cover') ? $this->Html->link($dashboard->package_cover->cover_types, ['controller' => 'PackageCovers', 'action' => 'view', $dashboard->package_cover->package_cover_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $dashboard->hasValue('order') ? $this->Html->link($dashboard->order->order_id, ['controller' => 'Orders', 'action' => 'view', $dashboard->order->order_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dashboard Id') ?></th>
                    <td><?= $this->Number->format($dashboard->dashboard_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>