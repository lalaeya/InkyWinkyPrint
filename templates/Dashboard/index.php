<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dashboard> $dashboard
 */
?>
<div class="dashboard index content">
    <h3 class="dashboard-title"><?= __('Admin Dashboard') ?></h3>

    <div class="admin-actions">
        <?= $this->Html->link('Edit Package Colours', ['controller' => 'PackageColours', 'action' => 'index'], ['class' => 'button action-button']) ?>
        <?= $this->Html->link('Edit Package Covers', ['controller' => 'PackageCovers', 'action' => 'index'], ['class' => 'button action-button']) ?>
        <?= $this->Html->link('View Orders', ['controller' => 'Packages', 'action' => 'index'], ['class' => 'button action-button']) ?>
    </div>
</div>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #cfe0f2, #f5d0c5);
        margin: 0;
        padding: 0;
        color: #333;
    }

    .dashboard.index.content {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
        text-align: center;
    }

    .dashboard-title {
        font-size: 2.5rem;
        color: #f8499b;
        font-weight: 700;
        margin-bottom: 40px;
    }

    .admin-actions {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
        max-width: 500px;
    }

    .button,
    .action-button {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 60px; /* ✅ Tinggi tetap untuk pastikan teks di tengah */
        padding: 0 30px; /* ✅ Padding hanya kiri & kanan */
        background: linear-gradient(135deg, #87cefa, #f8499b);
        color: white;
        font-size: 1.4rem;
        font-weight: 600;
        border-radius: 40px;
        text-align: center;
        text-decoration: none;
        border: none;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        box-sizing: border-box;
        white-space: nowrap;
    }

    .button:hover,
    .action-button:hover {
        transform: scale(1.05);
        background: linear-gradient(135deg, #609edb, #e63780);
    }

    .button:active,
    .action-button:active {
        transform: scale(0.98);
    }
</style>
