<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="login-container">
    <h2>Admin Login</h2>

    <?= $this->Form->create() ?>
        <?= $this->Form->control('admin_email', ['label' => 'Email']) ?>
        <?= $this->Form->control('password', ['type' => 'password']) ?>
        <?= $this->Form->button('Login') ?>
    <?= $this->Form->end() ?>
</div>

<style>
.login-container {
    max-width: 400px;
    margin: 100px auto;
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    font-family: 'Poppins', sans-serif;
}
.login-container h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #ff859f;
}
</style>

<!-- Styling -->
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #cfe0f2, #f5d0c5);
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .login-wrapper {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
    }

    .login-box {
        background-color: #fff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
    }

    h2 {
        font-size: 2.5rem;
        color: #ff6f8e;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .input-field {
        width: 100%;
        padding: 15px 20px;
        font-size: 16px;
        border-radius: 12px;
        border: 2px solid #ddd;
        background-color: #f9f9f9;
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .input-field:focus {
        border-color: #87cefa; /* soft blue border */
        outline: none;
    }

    .submit-button {
        background: linear-gradient(135deg, #ffb6c1, #87cefa);
        color: white;
        border: none;
        padding: 18px 30px;
        font-size: 18px;
        font-weight: 600;
        border-radius: 30px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .submit-button:hover {
        background: linear-gradient(135deg, #ff6f8e, #5aa0ff);
        transform: scale(1.02);
    }

    .submit-button:active {
        transform: scale(0.98);
    }

    .text-center {
        text-align: center;
    }

    @media (max-width: 768px) {
        .login-box {
            padding: 30px 20px;
        }

        h2 {
            font-size: 2rem;
        }

        .submit-button {
            font-size: 16px;
            padding: 15px;
        }
    }
</style>
