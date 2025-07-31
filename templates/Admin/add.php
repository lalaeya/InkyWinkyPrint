<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>

<div class="page-container">
    <div class="form-card">
        <h2><?= __('Add New Admin') ?></h2>

        <?= $this->Form->create($admin) ?>
        <fieldset>
            <legend><?= __('Please fill in details') ?></legend>

            <?= $this->Form->control('admin_email', [
                'label' => 'Email',
                'class' => 'input-field'
            ]) ?>

            <?= $this->Form->control('admin_phonenumber', [
                'label' => 'Phone Number',
                'class' => 'input-field'
            ]) ?>

            <?= $this->Form->control('password', [
                'label' => 'Password',
                'type' => 'password',
                'class' => 'input-field'
            ]) ?>
        </fieldset>

        <div class="button-wrapper">
            <?= $this->Form->button(__('Submit'), ['class' => 'submit-button']) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #cfe0f2, #f5d0c5);
        color: #333;
    }

    .page-container {
        min-height: calc(100vh - 100px); /* reserve space for footer/header */
        display: flex;
        justify-content: center;
        align-items: flex-start; /* form rapat atas */
        padding: 40px 20px 60px;
    }

    .form-card {
        background: #ffffff;
        padding: 30px 35px;
        border-radius: 20px;
        width: 100%;
        max-width: 480px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 20px;
        font-size: 26px;
    }

    fieldset {
        border: none;
        padding: 0;
        margin: 0;
    }

    legend {
        font-size: 16px;
        margin-bottom: 15px;
        color: #555;
        font-weight: 500;
    }

    .input-field {
        width: 100%;
        padding: 10px 14px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #fdfdfd;
        font-size: 15px;
        transition: 0.3s ease;
    }

    .input-field:focus {
        border-color: #ff8fa3;
        outline: none;
        box-shadow: 0 0 5px rgba(255, 143, 163, 0.3);
    }

    .button-wrapper {
        text-align: center;
        margin-top: 10px;
    }

    .submit-button {
        background: linear-gradient(135deg, #ffb6c1, #87cefa);
        color: #fff;
        border: none;
        border-radius: 30px;
        padding: 10px 30px;
        font-size: 16px;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s ease;
    }

    .submit-button:hover {
        background: linear-gradient(135deg, #ff6f8e, #5ca9e9);
    }

    .submit-button:active {
        transform: scale(0.97);
    }

    /* Optional footer (if any) stays at bottom */
    footer {
        text-align: center;
        padding: 15px 0;
        background-color: #f0f0f0;
        font-size: 14px;
        color: #888;
    }
</style>
