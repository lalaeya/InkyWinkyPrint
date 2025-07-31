<div class="packageCovers index content" style="padding: 40px;">
    <h3 style="font-size: 3rem; color: #ff6f8e; text-align: center; font-weight: bold;">
        <?= __('Package Covers') ?>
    </h3>

    <div style="text-align: center; margin-top: 20px;">
        <?= $this->Html->link('New Package Cover', ['action' => 'add'], ['class' => 'button new-package-button']) ?>
    </div>

    <div class="table-responsive" style="margin-top: 30px;">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cover_types') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($packageCovers as $packageCover): ?>
                <tr>
                    <td><?= h($packageCover->cover_types) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('View', ['action' => 'view', $packageCover->package_cover_id], ['class' => 'action-button view-button']) ?>
                        <?= $this->Html->link('Edit', ['action' => 'edit', $packageCover->package_cover_id], ['class' => 'action-button edit-button']) ?>
                        <?= $this->Form->postLink(
                            'Delete',
                            ['action' => 'delete', $packageCover->package_cover_id],
                            [
                                'confirm' => __('Are you sure you want to delete this item?'),
                                'class' => 'action-button delete-button'
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <?= $this->Html->link('Back', ['controller' => 'Dashboard', 'action' => 'index'], ['class' => 'back-button']) ?>
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

    table {
        width: 100%;
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
        font-weight: bold;
        color: #333;
    }

    .button, .action-button, .back-button, .new-package-button {
        display: inline-block;
        border-radius: 50px;
        padding: 12px 36px;
        font-size: 1.6rem;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s, transform 0.3s;
        margin: 5px;
        border: none;
        cursor: pointer;
        text-align: center;
        line-height: 1.5;
    }

    .button {
        background-color: #ffb6c1;
        color: white;
    }

    .button:hover {
        background-color: #ff6f8e;
        transform: scale(1.05);
    }

    .action-button {
        border: 3px solid;
    }

    .view-button {
        background-color: #ffb6c1;
        border-color: #ffb6c1;
        color: white;
    }

    .edit-button {
        background-color: #ff6f8e;
        border-color: #ff6f8e;
        color: white;
    }

    .delete-button {
        background-color: #f7a9a9;
        border-color: #f7a9a9;
        color: white;
    }

    .action-button:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }

    .back-button {
        background-color: #6ba9e2;
        color: white;
    }

    .back-button:hover {
        background-color: #4f8dc3;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .actions {
        text-align: center;
    }

    /* ✅ Tambahan untuk new-package-button supaya tulisan tidak kena border */
    .new-package-button {
        background-color: #ffb6c1;
        color: white;
        padding: 12px 36px;
        border-radius: 50px;
        font-weight: bold;
        font-size: 1.6rem;
        display: inline-block;
        line-height: 1.5;
        text-align: center;
        transition: background-color 0.3s, transform 0.3s;
    }

    .new-package-button:hover {
        background-color: #ff6f8e;
        transform: scale(1.05);
    }
</style>
