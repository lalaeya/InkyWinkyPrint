<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Customer> $customers
 */
?>
<div class="customers index content" style="background: linear-gradient(135deg, #cfe0f2, #f5d0c5); padding: 40px; border-radius: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
    <?= $this->Html->link(('New Customer'), ['action' => 'add'], ['class' => 'button float-right submit-button']) ?>
    <h3 style="font-size: 2.5rem; text-align: center; color: #ff6f8e; font-weight: bold;"><?= __('Customers') ?></h3>
    
    <div class="table-responsive">
        <table style="width: 100%; text-align: center; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #ffb6c1; color: white; font-size: 1.5rem; font-weight: bold;">
                    <th style="padding: 12px;">#</th>
                    <th style="padding: 12px;"><?= $this->Paginator->sort('cus_fname') ?></th>
                    <th style="padding: 12px;"><?= $this->Paginator->sort('cus_email') ?></th>
                    <th style="padding: 12px;"><?= $this->Paginator->sort('cus_phonenumber') ?></th>
                    <th class="actions" style="padding: 12px;"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr style="background-color: #f9f9f9; font-size: 1.2rem; border-radius: 10px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
                    <td style="padding: 12px;"><?= $this->Number->format($customer->cus_id) ?></td>
                    <td style="padding: 12px;"><?= h($customer->cus_fname) ?></td>
                    <td style="padding: 12px;"><?= h($customer->cus_email) ?></td>
                    <td style="padding: 12px;"><?= h($customer->cus_phonenumber) ?></td>
                    <td class="actions" style="padding: 12px;">
                        <?= $this->Html->link(('View'), ['action' => 'view', $customer->cus_id], ['class' => 'button action-button']) ?>
                        <?= $this->Html->link(('Edit'), ['action' => 'edit', $customer->cus_id], ['class' => 'button action-button']) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $customer->cus_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $customer->cus_id),
                                'class' => 'button delete-button'
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator" style="text-align: center; margin-top: 20px;">
        <ul class="pagination" style="list-style: none; display: flex; gap: 15px; justify-content: center;">
            <?= $this->Paginator->first('<< ' . __('first'), ['class' => 'button paginator-button']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['class' => 'button paginator-button']) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(('next') . ' >', ['class' => 'button paginator-button']) ?>
            <?= $this->Paginator->last(('last') . ' >>', ['class' => 'button paginator-button']) ?>
        </ul>
        <p><?= $this->Paginator->counter(('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

<!-- Add some styles for a cute and bubbly design -->
<style>
    /* Body Styling */
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #cfe0f2, #f5d0c5); /* Light Blue and Light Pink Gradient */
        margin: 0;
        padding: 0;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
    }

    .row {
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 20px;
    }

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

    .customers.form.content {
        background-color: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 900px;
        box-sizing: border-box;
    }

    label {
        font-size: 20px;
        font-weight: 500;
        color: #333;
        font-family: 'Poppins', sans-serif;
    }

    /* Input Fields Styling */
    .input-field {
        width: 100%;
        padding: 20px;
        font-size: 18px;
        border-radius: 12px;
        border: 3px solid #ddd; /* Increased border width */
        box-sizing: border-box;
        background-color: #f9f9f9;
        margin-bottom: 20px;
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
        padding: 20px 40px;
        border: 3px solid #ffb6c1; /* Increased border width */
        font-size: 24px;
        font-weight: 600;
        border-radius: 50px;
        cursor: pointer;
        text-align: center;
        display: inline-block;
        width: 100%;
        height: 80px;
        line-height: 50px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .submit-button:hover {
        background-color: #ff6f8e;
        border-color: #ff6f8e; /* Darker pink border on hover */
    }

    .submit-button:active {
        transform: scale(0.98);
    }

    /* Button Styling for Actions */
    .button {
        background-color: #ffb6c1; /* Light Pink Button */
        color: white;
        padding: 12px 24px;
        border-radius: 50px;
        text-align: center;
        text-decoration: none;
        font-size: 18px;
        margin-top: 10px;
        display: inline-block;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #ff6f8e;
    }

    .paginator-button {
        background-color: #4db2f1; /* Light Blue Background */
        color: white;
        padding: 12px 20px;
        border-radius: 50px;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .paginator-button:hover {
        background-color: #6ba9e2;
    }

    /* Styling for delete button */
    .delete-button {
        background-color: #ff6f8e; /* Red Button for Delete */
    }

    .delete-button:hover {
        background-color: #e35d5d;
    }

    /* Styling for action buttons (Edit/View) */
    .action-button {
        background-color: #ffb6c1;
    }

    .action-button:hover {
        background-color: #ff6f8e;
    }

    /* Card-like table rows */
    tr {
        background-color: #f9f9f9;
        border-radius: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 15px;
        text-align: center;
        font-size: 16px;
    }

    .paginator {
        text-align: center;
    }

    .table-responsive {
        overflow-x: auto;
    }
</style>