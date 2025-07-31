<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackageCover $packageCover
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Package Cover'), ['action' => 'edit', $packageCover->package_cover_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Package Cover'), ['action' => 'delete', $packageCover->package_cover_id], ['confirm' => __('Are you sure you want to delete # {0}?', $packageCover->package_cover_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Package Covers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Package Cover'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="packageCovers view content">
            <h3><?= h($packageCover->cover_types) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cover Types') ?></th>
                    <td><?= h($packageCover->cover_types) ?></td>
                </tr>
                <tr>
                    <th><?= __('Package Cover Id') ?></th>
                    <td><?= $this->Number->format($packageCover->package_cover_id) ?></td>
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