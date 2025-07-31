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
            <?= $this->Html->link(('List Package Colours'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="column column-80" style="max-width: 1200px; width: 100%; padding: 20px;">
        <div class="packageColours form content" style="background-color: #fff; padding: 50px; border-radius: 25px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
            <h2 style="font-size: 2.5rem; color: #ff6f8e; text-align: center; font-weight: bold;"><?= __('Add Package Colour') ?></h2>
            
            <?= $this->Form->create($packageColour) ?>
            <fieldset>
                <legend style="font-size: 1.8rem; color: #ff6f8e; text-align: center;"><?= __('Insert Colour Information') ?></legend>
                <?= $this->Form->control('colour_types', [
                    'label' => 'Colour Type', 
                    'class' => 'input-field', 
                    'placeholder' => 'Enter the colour type',
                    'required' => true
                ]) ?>
            </fieldset>

            <div style="text-align: center; margin-top: 20px;">
                <?= $this->Form->button(('Submit'), ['class' => 'submit-button']) ?>
            </div>
            <?= $this->Form->end() ?>
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

    /* Form Content Styling */
    .packageColours.form.content {
        background-color: #fff;
        padding: 50px;
        border-radius: 25px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
        margin: auto;
    }

    /* Form Control Styling */
    .input-field {
        width: 100%;
        padding: 18px;
        font-size: 1.5rem;
        border-radius: 15px;
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

    /* Button Styling */
    .submit-button {
        background-color: #ffb6c1;
        color: white;
        padding: 18px 40px;
        border: none;
        font-size: 1.8rem;
        font-weight: 600;
        border-radius: 50px;
        cursor: pointer;
        text-align: center;
        display: inline-block;
        width: 100%;
        height: 70px;
        line-height: 50px;
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