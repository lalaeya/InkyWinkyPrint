<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackageCover $packageCover
 */
?>
<div class="row" style="justify-content: center; padding: 40px;">
    <!-- Side Navigation -->
    <aside class="column" style="max-width: 220px;">
        <div class="side-nav" style="background-color: #a1c9f4; padding: 30px; border-radius: 20px;">
            <h4 class="heading" style="font-family: 'Poppins', sans-serif; font-size: 1.8rem; color: #ff6f8e; font-weight: bold; text-align: center;"><?= __('Actions') ?></h4>
            <?= $this->Html->link(('List Package Covers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="column column-80" style="max-width: 1200px; width: 100%; padding: 20px;">
        <div class="packageCovers form content" style="background-color: #fff; padding: 50px; border-radius: 25px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
            <h3 style="font-size: 2.5rem; color: #ff6f8e; text-align: center; font-weight: bold;"><?= __('Add Package Cover') ?></h3>
            
            <!-- Form for Adding Package Cover -->
            <?= $this->Form->create($packageCover) ?>
            <fieldset>
                <legend style="font-size: 2rem; color: #ff6f8e; text-align: center; font-weight: bold;"><?= __('Package Cover Details') ?></legend>
                <br>
                <?php
                    echo $this->Form->control('cover_types', [
                        'label' => 'Cover Type', 
                        'class' => 'input-field', 
                        'placeholder' => 'Enter Cover Type',
                    ]);
                ?>
            </fieldset>
            <!-- Submit Button -->
            <div class="text-center" style="margin-top: 20px;">
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
        justify-content: space-between;
        padding: 20px;
    }

    /* Side Navigation */
    .side-nav {
        background-color: #a1c9f4; /* Light blue background */
        padding: 20px;
        border-radius: 20px;
        width: 220px;
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
        transition: background-color 0.3s, transform 0.3s;
    }

    .side-nav-item:hover {
        background-color: #ff6f8e;
        transform: scale(1.05);
    }

    /* Form Layout */
    .packageCovers.form.content {
        background-color: #fff;
        padding: 50px;
        border-radius: 25px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
        width: 100%;
        margin: auto;
    }

    .input-field {
        width: 100%;
        padding: 20px;
        font-size: 18px;
        border-radius: 12px;
        border: 2px solid #ddd;
        box-sizing: border-box;
        background-color: #f9f9f9;
        margin-bottom: 25px;
        transition: border 0.3s ease;
    }

    .input-field:focus {
        border-color: #ffb6c1;
        outline: none;
    }

    /* Submit Button Styling */
    .submit-button {
        background-color: #ffb6c1; /* Light Pink Button */
        color: white;
        padding: 0 30px; /* asal: 15px 30px */
        font-size: 18px;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        display: inline-block;
        width: 50%;
        height: 60px;
        line-height: 60px;
        transition: background-color 0.3s, transform 0.3s;
        box-sizing: border-box;
    }


    .submit-button:hover {
        background-color: #ff6f8e;
    }

    .submit-button:active {
        transform: scale(0.98);
    }

    /* Form Labels and Headings */
    legend, label {
        font-size: 1.8rem;
        color: #ff6f8e;
        font-weight: bold;
    }
</style>