<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Admin> $admin
 */
?>
<div class="admin index content">
    <?= $this->Html->link(__('New Admin'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Admin') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('admin_id') ?></th>
                    <th><?= $this->Paginator->sort('admin_fname') ?></th>
                    <th><?= $this->Paginator->sort('admin_email') ?></th>
                    <th><?= $this->Paginator->sort('admin_phonenumber') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('package_colour_id') ?></th>
                    <th><?= $this->Paginator->sort('package_cover_id') ?></th>
                    <th><?= $this->Paginator->sort('payment_method_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admin as $admin): ?>
                <tr>
                    <td><?= $this->Number->format($admin->admin_id) ?></td>
                    <td><?= h($admin->admin_fname) ?></td>
                    <td><?= h($admin->admin_email) ?></td>
                    <td><?= h($admin->admin_phonenumber) ?></td>
                    <td><?= $admin->hasValue('order') ? $this->Html->link($admin->order->order_id, ['controller' => 'Orders', 'action' => 'view', $admin->order->order_id]) : '' ?></td>
                    <td><?= $admin->hasValue('package_colour') ? $this->Html->link($admin->package_colour->colour_types, ['controller' => 'PackageColours', 'action' => 'view', $admin->package_colour->package_colour_id]) : '' ?></td>
                    <td><?= $admin->hasValue('package_cover') ? $this->Html->link($admin->package_cover->cover_types, ['controller' => 'PackageCovers', 'action' => 'view', $admin->package_cover->package_cover_id]) : '' ?></td>
                    <td><?= $admin->hasValue('payment_method') ? $this->Html->link($admin->payment_method->payment_method_id, ['controller' => 'PaymentMethods', 'action' => 'view', $admin->payment_method->payment_method_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $admin->admin_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->admin_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $admin->admin_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $admin->admin_id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>