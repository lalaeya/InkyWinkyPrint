<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="form-container"style="background: linear-gradient(to bottom right, #ffccdc, #d5b8ff); padding: 20px; border-radius: 15px; margin-top: 0px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <div class="customers form content">
        <?= $this->Form->create($customer) ?>
        <fieldset>
            <legend class="form-title"><?= ('Fill in your details here') ?></legend>

            <!-- Customer Details -->
            <?= $this->Form->control('cus_fname', ['label' => 'First Name', 'class' => 'input-field', 'required' => true]) ?>
            <?= $this->Form->control('cus_email', ['label' => 'Email Address', 'class' => 'input-field', 'required' => true]) ?>
            <?= $this->Form->control('cus_phonenumber', ['label' => 'Phone Number', 'class' => 'input-field', 'required' => true]) ?>

        </fieldset>

        <!-- Button -->
        <div class="submit-wrapper">
            <?= $this->Form->button(__('Submit'), ['class' => 'submit-button', 'id' => 'submitBtn']) ?>
        </div>

        <?= $this->Form->end() ?>
    </div>
</div>

<style>
    /* FORM CONTAINER */
    .form-container {
        max-width: 600px;
        margin: 60px auto;
        padding: 30px;
        background: white;
        border-radius: 18px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    /* FORM TITLE */
    .form-title {
        font-size: 2rem;
        font-weight: 600;
        color: #ff6f91;
        text-align: center;
        margin-bottom: 25px;
    }

    /* LABEL */
    label {
        font-size: 1.4rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 5px;
        display: block;
    }

    /* INPUT FIELD */
    .input-field {
        width: 100%;
        padding: 12px 15px;
        font-size: 1.4rem;
        border-radius: 10px;
        border: 1.5px solid #ddd;
        margin-bottom: 18px;
        background-color: #fdfdfd;
        transition: 0.3s;
    }

    .input-field:focus {
        border-color: #aad4f5;
        box-shadow: 0 0 5px rgba(173, 216, 230, 0.4);
        outline: none;
        background-color: #fff;
    }

    /* BUTTON */
    .submit-wrapper {
        text-align: center;
        margin-top: 20px;
    }

    .submit-button {
        background: linear-gradient(135deg, #85cbf7ff, #fdafc0ff);
        color: white;
        font-size: 1.2rem;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        transition: 0.4s ease;
        font-weight: 600;
        box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
        text-align: center; /* Tambahan ini */
    }


    .submit-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.3);
        background: linear-gradient(135deg, #e4e7e9ff;
    }

    .submit-button:active {
        transform: scale(0.97);
    }

    /* RESPONSIVE */
    @media screen and (max-width: 768px) {
        .form-container {
            padding: 20px;
            margin: 30px 15px;
        }

        .form-title {
            font-size: 1.5rem;
        }

        .submit-button {
            width: 100%;
        }
    }
</style>
