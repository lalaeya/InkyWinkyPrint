<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="profile-container">
    <br><br>
    <div class="profile-card">
        <!-- Left Panel -->
        <div class="left-panel">
            <h2>InkyWinky</h2>
            <p>Printing Service</p>
            <div class="btn-group">
                <?= $this->Html->link('Edit Details', ['action' => 'edit', $customer->cus_id], ['class' => 'btn edit']) ?>
                <?= $this->Form->postLink('Delete Details', ['action' => 'delete', $customer->cus_id], ['confirm' => __('Are you sure you want to delete your details?'), 'class' => 'btn delete']) ?>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="right-panel">
            <h3>Customer Details</h3>
            <p><strong>Full Name:</strong> <?= h($customer->cus_fname) ?></p>
            <p><strong>Email:</strong> <?= h($customer->cus_email) ?></p>
            <p><strong>Phone Number:</strong> <?= h($customer->cus_phonenumber) ?></p>

            <!-- Make Order Button -->
            <div class="order-btn">
                <?= $this->Html->link('Make Order', [
                    'controller' => 'Packages',
                    'action' => 'add',
                    '?' => ['cus_id' => $customer->cus_id]
                ], ['class' => 'make-order']) ?>
            </div>
        </div>
    </div>

    <br><br>
</div>

<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #fce4ec, #d0f0fd);
    }

 

    .profile-card {
        display: flex;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        overflow: hidden;
        width: 100%;
        max-width: 1000px;
    }

    .left-panel {
        background: linear-gradient(to bottom right, #ffccdc, #d5b8ff);
        padding: 40px;
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #333;
    }

    .left-panel h2 {
        font-size: 28px;
        margin-bottom: 10px;
        color: #a60084;
    }

    .btn-group {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .btn {
        border: none;
        padding: 12px 20px;
        border-radius: 30px;
        font-size: 15px;
        font-weight: bold;
        color: #fff;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .btn.edit {
        background-color: #ff859fff;
    }

    .btn.delete {
        background-color: #ff859fff;
    }

    .btn:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .right-panel {
        flex: 2;
        padding: 40px;
    }

    .right-panel h3 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #222;
    }

    .right-panel p {
        margin: 12px 0;
        font-size: 16px;
        color: #333;
    }

    .right-panel strong {
        color: #9b4dca;
    }

    .order-btn {
        margin-top: 30px;
    }

    .make-order {
        background: linear-gradient(to right, #ff859fff);
        color: white;
        padding: 12px 30px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .make-order:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }

    @media screen and (max-width: 768px) {
        .profile-card {
            flex-direction: column;
        }

        .left-panel, .right-panel {
            flex: unset;
            width: 100%;
            padding: 30px;
            text-align: center;
        }

        .btn-group {
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
        }
    }
</style>
