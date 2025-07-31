<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $packages
 * @var \Cake\Collection\CollectionInterface|string[] $cuses
 * @var \Cake\Collection\CollectionInterface|string[] $payments
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Add Order') ?></legend>
                <?php
                    echo $this->Form->control('package_id', ['options' => $packages, 'empty' => true]);
                    echo $this->Form->control('cus_id', ['options' => $cuses]);
                    echo $this->Form->control('payment_id', ['options' => $payments]);
                    echo $this->Form->control('pickup_time');
                    echo $this->Form->control('pickup_date');
                    echo $this->Form->control('order_date');
                    echo $this->Form->control('order_status');
                    echo $this->Form->control('payment_amount');
                    echo $this->Form->control('payment_status');
                    echo $this->Form->control('pickup_status');
                    echo $this->Form->control('created_at', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
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