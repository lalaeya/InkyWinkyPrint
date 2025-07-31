<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->order_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->order_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="orders view content">
            <h3><?= h($order->order_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Package') ?></th>
                    <td><?= $order->hasValue('package') ? $this->Html->link($order->package->package_desc, ['controller' => 'Packages', 'action' => 'view', $order->package->package_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cus') ?></th>
                    <td><?= $order->hasValue('cus') ? $this->Html->link($order->cus->cus_fname, ['controller' => 'Customers', 'action' => 'view', $order->cus->cus_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment') ?></th>
                    <td><?= $order->hasValue('payment') ? $this->Html->link($order->payment->payment_method, ['controller' => 'Payments', 'action' => 'view', $order->payment->payment_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Status') ?></th>
                    <td><?= h($order->order_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Status') ?></th>
                    <td><?= h($order->payment_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pickup Status') ?></th>
                    <td><?= h($order->pickup_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Id') ?></th>
                    <td><?= $this->Number->format($order->order_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Amount') ?></th>
                    <td><?= $this->Number->format($order->payment_amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pickup Time') ?></th>
                    <td><?= h($order->pickup_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pickup Date') ?></th>
                    <td><?= h($order->pickup_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Date') ?></th>
                    <td><?= h($order->order_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($order->created_at) ?></td>
                </tr>
            </table>
        </div>
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