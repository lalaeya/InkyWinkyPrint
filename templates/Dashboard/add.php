<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dashboard $dashboard
 * @var \Cake\Collection\CollectionInterface|string[] $packageColours
 * @var \Cake\Collection\CollectionInterface|string[] $packageCovers
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 */
?>
<div class="row" style="justify-content: center; padding: 40px;">
    <!-- Side Navigation -->
    <aside class="column" style="max-width: 220px;">
        <div class="side-nav" style="background-color: #a1c9f4; padding: 30px; border-radius: 20px;">
            <h4 class="heading" style="font-family: 'Poppins', sans-serif; font-size: 1.8rem; color: #ff6f8e; font-weight: bold; text-align: center;"><?= __('Actions') ?></h4>
            <?= $this->Html->link(('List Dashboard'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="column column-80" style="max-width: 1200px; width: 100%; padding: 20px;">
        <div class="dashboard form content" style="background-color: #fff; padding: 50px; border-radius: 25px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
            <h3 style="font-size: 2.5rem; color: #ff6f8e; text-align: center; font-weight: bold;"><?= __('Add Dashboard') ?></h3>
            
            <!-- Form Content -->
            <?= $this->Form->create($dashboard) ?>
            <fieldset>
                <legend style="font-size: 1.8rem; color: #ff6f8e; font-weight: bold;"><?= __('Please Fill in Dashboard Details') ?></legend>

                <?php
                    echo $this->Form->control('package_colour_id', [
                        'options' => $packageColours, 
                        'label' => 'Package Colour', 
                        'class' => 'input-field'
                    ]);
                    echo $this->Form->control('package_cover_id', [
                        'options' => $packageCovers, 
                        'label' => 'Package Cover', 
                        'class' => 'input-field'
                    ]);
                    echo $this->Form->control('order_id', [
                        'options' => $orders, 
                        'label' => 'Order', 
                        'class' => 'input-field'
                    ]);
                ?>
            </fieldset>

            <div style="text-align: center; margin-top: 30px;">
                <?= $this->Form->button(('Submit'), ['class' => 'submit-button']) ?>
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<!-- Styling -->
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

    .row {
        display: flex;
        justify-content: center;
        padding: 20px;
    }

    /* Side Navigation */
    .side-nav {
        background-color: #a1c9f4; /* Light blue background */
        padding: 30px;
        border-radius: 20px;
        width: 220px;
    }

    .side-nav-item {
        display: block;
        padding: 15px;
        color: white;
        text-decoration: none;
        font-weight: bold;
        margin: 10px 0;
        border-radius: 10px;
        background-color: #6ba9e2;
        text-align: center;
    }

    .side-nav-item:hover {
        background-color: #4f8dc3;
    }

    /* Form Layout */
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

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 30px;
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
</style>