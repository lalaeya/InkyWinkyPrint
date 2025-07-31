<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>

<h2 style="text-align: center; font-size: 3.5rem; color: #f8499b; font-weight: bold;">
    <?= __('Admin Dashboard') ?>
</h2>

<div class="row">
    <!-- Manage Packages Section -->
    <div class="column">
        <div class="card">
            <h4 class="section-title"><?= __('Manage Packages') ?></h4>
            <div class="button-group">
                <?= $this->Html->link('Edit Package Colours', ['controller' => 'PackageColours', 'action' => 'index'], ['class' => 'button action-button']) ?>
                <?= $this->Html->link('Edit Package Covers', ['controller' => 'PackageCovers', 'action' => 'index'], ['class' => 'button action-button']) ?>
            </div>
        </div>
    </div>

    <!-- View Orders Section -->
    <div class="column">
        <div class="card">
            <h4 class="section-title"><?= __('View Orders') ?></h4>
            <div class="button-group">
                <?= $this->Html->link('View All Orders', ['controller' => 'Orders', 'action' => 'index'], ['class' => 'button action-button']) ?>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styling -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #cfe0f2, #f5d0c5);
        margin: 0;
        padding: 0;
        color: #333;
    }

    h2 {
        margin-top: 40px;
    }

    .row {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        padding: 30px;
        gap: 20px;
    }

    .column {
        flex: 1;
        min-width: 300px;
        padding: 20px;
    }

    .card {
        background-color: #fff;
        padding: 30px;
        border-radius: 25px;
        box-shadow: 0px 12px 30px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.03);
        box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.15);
    }

    .section-title {
        color: #f8499b;
        font-weight: bold;
        text-align: center;
        font-size: 2rem;
        margin-bottom: 25px;
    }

    .button-group {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 100%;
        align-items: center;
    }

    .button,
    .action-button {
        display: inline-block;
        width: 100%;
        max-width: 250px;
        text-align: center;
        padding: 15px 20px;
        background-color: #f8499b;
        color: white;
        font-size: 18px;
        font-weight: bold;
        border-radius: 40px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .button:hover,
    .action-button:hover {
        background-color: #e63780;
        transform: scale(1.05);
    }

    .button:active,
    .action-button:active {
        transform: scale(0.98);
    }
</style>
