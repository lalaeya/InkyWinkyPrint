<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\PackageColour> $packageColours
 */
?>
<div class="packageColours index content" style="font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #cfe0f2, #f5d0c5); padding: 20px;">
   
    <!-- New Package Colour Button -->
    <?= $this->Html->link(('New Package Colour'), ['action' => 'add'], ['class' => 'button new-package-btn']) ?>

    <h3 style="text-align: center; font-size: 2.5rem; color: #ff6f8e; font-weight: bold;"><?= __('Package Colours') ?></h3>

    <div class="table-responsive">
        <table style="width: 100%; margin-top: 30px; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 12px; text-align: left;"><?= $this->Paginator->sort('colour_types') ?></th>
                    <th style="font-size: 1.8rem; color: #9b4dca; font-weight: bold; padding: 12px; text-align: left;" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($packageColours as $packageColour): ?>
                <tr style="border-bottom: 2px solid #f5f5f5;">
                    <td style="font-size: 1.6rem; color: #333; padding: 12px;"><?= h($packageColour->colour_types) ?></td>
                    <td class="actions" style="padding: 12px; text-align: left;">
                        <?= $this->Html->link(('View'), ['action' => 'view', $packageColour->package_colour_id], ['class' => 'action-button view-btn']) ?>
                        <?= $this->Html->link(('Edit'), ['action' => 'edit', $packageColour->package_colour_id], ['class' => 'action-button edit-btn']) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $packageColour->package_colour_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete?', $packageColour->package_colour_id),
                                'class' => 'action-button delete-btn'
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?= $this->Html->link(('Back'), ['controller' => 'dashboard'],['action' => 'index'], ['class' => 'back-btn']) ?>

    </div>
</div>

<!-- Styling for the page -->
<style>
    /* Body Styling */
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #cfe0f2, #f5d0c5); /* Light Blue and Light Pink Gradient */
        margin: 0;
        padding: 0;
        color: #333;
    }

    /* Table Styling */
    table {
        width: 100%;
        margin-top: 30px;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
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
    .button, .action-button, .new-package-btn {
        display: inline-block;
        padding: 12px 24px;
        background-color: #ffb6c1; /* Light Pink Button */
        color: white;
        font-size: 16px;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        margin-top: 10px;
        transition: background-color 0.3s ease, transform 0.3s ease, border 0.3s ease;
        border: 3px solid transparent; /* Default border width */
    }

   .new-package-btn {
        padding: 10px 36px; /* atas & bawah 10px, kiri & kanan 36px */
        line-height: 1.5; /* bantu tengah secara menegak */
        display: inline-block;
        text-align: center;
        vertical-align: middle;
    }


    .new-package-btn:hover {
        background-color: #ff6f8e;
    }

    .action-button.view-btn {
        background-color: #ffb6c1;
        border: 3px solid #ffb6c1; /* Increase border width */
    }

    .action-button.view-btn:hover {
        background-color: #ff6f8e;
        border-color: #ff6f8e; /* Darker pink border on hover */
    }

    .action-button.edit-btn {
        background-color: #ff9b77; /* Orange for Edit */
        border: 3px solid #ff9b77;
    }

    .action-button.edit-btn:hover {
        background-color: #ff7d54;
        border-color: #ff7d54;
    }

    .action-button.delete-btn {
        background-color: #ff4d4d; /* Red for Delete */
        border: 3px solid #ff4d4d;
    }

    .action-button.delete-btn:hover {
        background-color: #e60000;
        border-color: #e60000;
    }

    /* Hover and Active Button States */
    .button:hover, .action-button:hover, .new-package-btn:hover {
        transform: scale(1.05);
    }

    .button:active, .action-button:active, .new-package-btn:active {
        transform: scale(0.98);
    }

    /* Row Layout */
    .row {
        display: flex;
        justify-content: space-around;
        padding: 20px;
    }

    .column {
        flex: 1;
        padding: 20px;
    }

    /* Back Button */
    .back-btn {
        display: inline-block;
        padding: 12px 24px;
        background-color: #6ba9e2; /* Light Blue for Back */
        color: white;
        font-size: 16px;
        font-weight: bold;
        border-radius: 50px;
        text-align: center;
        text-decoration: none;
        margin-top: 20px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .back-btn:hover {
        background-color: #4f8dc3;
    }

    .back-btn:active {
        transform: scale(0.98);
    }
</style>