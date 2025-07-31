<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackageColour $packageColour
 */
?>
<div class="row" style="justify-content: center; padding: 40px;">
    <!-- Side Navigation -->
    <aside class="column" style="max-width: 220px;">
        <div class="side-nav" style="background-color: #a1c9f4; padding: 30px; border-radius: 20px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
            <h4 class="heading" style="font-family: 'Poppins', sans-serif; font-size: 1.8rem; color: #ff6f8e; font-weight: bold; text-align: center;"><?= __('Actions') ?></h4>
            <?= $this->Html->link(('Edit Package Colour'), ['action' => 'edit', $packageColour->package_colour_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(('Delete Package Colour'), ['action' => 'delete', $packageColour->package_colour_id], ['confirm' => __('Are you sure you want to delete?', $packageColour->package_colour_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(('List Package Colours'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(('New Package Colour'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="column column-80" style="max-width: 1200px; width: 100%; padding: 20px;">
        <div class="packageColours view content" style="background-color: #fff; padding: 50px; border-radius: 25px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
            <h3 style="font-size: 2.5rem; color: #ff6f8e; text-align: center; font-weight: bold;"><?= h($packageColour->colour_types) ?></h3>
            
            <!-- Table for Displaying Package Colour Details -->
            <table style="width: 100%; margin-top: 30px; border-collapse: collapse;">
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 15px; text-align: left;"><?= __('Colour Types') ?></th>
                    <td style="font-size: 1.6rem; color: #333; font-weight: bold; padding: 15px; text-align: left;"><?= h($packageColour->colour_types) ?></td>
                </tr>
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 15px; text-align: left;"><?= __('Package Colour Id') ?></th>
                    <td style="font-size: 1.6rem; color: #333; font-weight: bold; padding: 15px; text-align: left;"><?= $this->Number->format($packageColour->package_colour_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Styling for a cute and bubbly design -->
<style>
    /* Body Styling */
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #cfe0f2, #f5d0c5); /* Light Blue and Light Pink Gradient */
        margin: 0;
        padding: 0;
        color: #333;
        text-align: center;
    }

    /* Row Styling */
    .row {
        display: flex;
        justify-content: center;
        padding: 20px;
    }

    /* Side Navigation Styling */
    .side-nav {
        background-color: #a1c9f4;
        padding: 30px;
        border-radius: 25px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    }

    .side-nav-item {
        display: block;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-weight: bold;
        margin: 10px 0;
        border-radius: 10px;
        background-color: #6ba9e2;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .side-nav-item:hover {
        background-color: #4f8dc3;
    }

    /* Table Styling */
    table {
        width: 100%;
        margin-top: 30px;
        border-collapse: collapse;
    }

    th, td {
        padding: 15px;
        text-align: left;
        font-size: 1.6rem;
    }

    th {
        background-color: #ffb6c1;
        color: white;
        font-weight: bold;
    }

    td {
        background-color: #f9f9f9;
    }

    /* Button Styling */
    .side-nav-item {
        display: block;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-weight: bold;
        margin: 10px 0;
        border-radius: 10px;
        background-color: #6ba9e2;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .side-nav-item:hover {
        background-color: #4f8dc3;
    }

    /* Submit Button Styling */
    .submit-button {
        background-color: #ffb6c1;
        color: white;
        padding: 18px 40px;
        border: none;
        font-size: 1.8rem;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        text-align: center;
        width: 100%;
        height: 80px;
        line-height: 60px;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
    }

    .submit-button:hover {
        background-color: #ff6f8e;
        transform: scale(1.05);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    }

    .submit-button:active {
        transform: scale(0.98);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>