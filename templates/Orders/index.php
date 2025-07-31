<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Order> $orders
 */
?>
<div class="orders index content">
    <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('package_id') ?></th>
                    <th><?= $this->Paginator->sort('cus_id') ?></th>
                    <th><?= $this->Paginator->sort('payment_id') ?></th>
                    <th><?= $this->Paginator->sort('pickup_time') ?></th>
                    <th><?= $this->Paginator->sort('pickup_date') ?></th>
                    <th><?= $this->Paginator->sort('order_date') ?></th>
                    <th><?= $this->Paginator->sort('order_status') ?></th>
                    <th><?= $this->Paginator->sort('payment_amount') ?></th>
                    <th><?= $this->Paginator->sort('payment_status') ?></th>
                    <th><?= $this->Paginator->sort('pickup_status') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Number->format($order->order_id) ?></td>
                    <td><?= $order->hasValue('package') ? $this->Html->link($order->package->package_desc, ['controller' => 'Packages', 'action' => 'view', $order->package->package_id]) : '' ?></td>
                    <td><?= $order->hasValue('cus') ? $this->Html->link($order->cus->cus_fname, ['controller' => 'Customers', 'action' => 'view', $order->cus->cus_id]) : '' ?></td>
                    <td><?= $order->hasValue('payment') ? $this->Html->link($order->payment->payment_method, ['controller' => 'Payments', 'action' => 'view', $order->payment->payment_id]) : '' ?></td>
                    <td><?= h($order->pickup_time) ?></td>
                    <td><?= h($order->pickup_date) ?></td>
                    <td><?= h($order->order_date) ?></td>
                    <td><?= h($order->order_status) ?></td>
                    <td><?= $this->Number->format($order->payment_amount) ?></td>
                    <td><?= h($order->payment_status) ?></td>
                    <td><?= h($order->pickup_status) ?></td>
                    <td><?= h($order->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->order_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->order_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $order->order_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $order->order_id),
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

<!-- Designing -->
<style>
    /* Body Styling */
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #cfe0f2, #f5d0c5); /* Light Blue and Light Pink Gradient */
        margin: 0;
        padding: 0;
        color: #333;
    }
    
    .row {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }

    /* Side Navigation */
    .side-nav {
        background-color: #a1c9f4; /* Light blue background */
        padding: 20px;
        border-radius: 10px;
        width: 220px;
    }
    
    .side-nav-item {
        display: block;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-weight: bold;
        margin: 10px 0;
        border-radius: 5px;
        background-color: #6ba9e2;
        text-align: center;
    }

    .side-nav-item:hover {
        background-color: #4f8dc3;
    }
    
    /* Form Layout */
    .customer-form {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .form-control {
        margin-bottom: 20px;
    }

    .input-field {
        width: 100%;
        padding: 14px;
        font-size: 16px;
        border-radius: 10px;
        border: 1px solid #ddd;
        box-sizing: border-box;
        background-color: #f9f9f9;
        transition: border 0.3s ease;
    }
    
    .input-field:focus {
        border-color: #ffb6c1; /* Light Pink border on focus */
        outline: none;
    }

    /* Submit Button Styling */
    .submit-button {
        background-color: #ffb6c1; /* Light Pink Button */
        color: white;
        padding: 15px 30px;
        border: none;
        font-size: 30px;
        font-weight: 600;
        border-radius: 50px;
        cursor: pointer;
        text-align: center;
        display: inline-block;
        width: 100%; /* Make the button full-width */
        height: 80px; /* Set a specific height for the button */
        line-height: 60px; /* Center the text vertically */
        transition: background-color 0.3s, transform 0.3s;
    }

    /* Button Hover and Active States */
    .submit-button:hover {
        background-color: #ff6f8e;
    }

    .submit-button:active {
        transform: scale(0.98);
    }