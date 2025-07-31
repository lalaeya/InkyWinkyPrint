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
                <?= $this->Form->postLink('Delete Details', ['action' => 'delete', $customer->cus_id], [
                    'confirm' => __('Are you sure you want to delete your details?'),
                    'class' => 'btn delete'
                ]) ?>
                <?= $this->Html->link('Back to View', ['action' => 'view', $customer->cus_id], ['class' => 'btn edit']) ?>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="right-panel">
            <h3>Edit Customer</h3>
            <?= $this->Form->create($customer) ?>
            <div class="form-group">
                <?= $this->Form->control('cus_fname', [
                    'label' => 'Full Name',
                    'class' => 'input',
                    'placeholder' => 'Enter full name',
                    'required' => true
                ]) ?>
                <?= $this->Form->control('cus_email', [
                    'label' => 'Email',
                    'class' => 'input',
                    'placeholder' => 'Enter email address',
                    'required' => true
                ]) ?>
                <?= $this->Form->control('cus_phonenumber', [
                    'label' => 'Phone Number',
                    'class' => 'input',
                    'placeholder' => 'Enter phone number',
                    'required' => true
                ]) ?>
            </div>
            <div class="order-btn">
                <?= $this->Form->button('Save Changes', ['class' => 'make-order']) ?>
            </div>
            <?= $this->Form->end() ?>
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

    .profile-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px ;
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
        padding: 10px;
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
        cursor: pointer;
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
        text-align: center;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    label {
        font-weight: 600;
        margin-bottom: 6px;
        color: #333;
    }

    .input {
        width: 100%;
        padding: 14px;
        font-size: 16px;
        border-radius: 10px;
        border: 2px solid #ccc;
        background-color: #f9f9f9;
        transition: border-color 0.3s;
    }

    .input:focus {
        border-color: #f49ac2;
        outline: none;
    }

    .order-btn {
        margin-top: 30px;
        text-align: center;
    }

    .make-order {
        background: linear-gradient(to right, #ff859fff, #ff6f8eff);
        color: white;
        border-radius: 50px;
        font-size: 12px;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        border: none;
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
            padding: 10px;
            text-align: center;
        }

        .btn-group {
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
        }
    }
</style>
