<style>
    /* Body Styling */
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #cfe0f2, #f5d0c5); /* Light Blue and Light Pink Gradient */
        margin: 0;
        padding: 0;
        color: #333;
    }
    
    /* Header Styling */
    h3 {
        font-size: 2.5rem;
        color: #ff6f8e;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 15px;
        text-align: left;
        font-size: 1.6rem;
        transition: background-color 0.3s ease;
    }

    th {
        background-color: #ffb6c1;
        color: white;
        font-weight: bold;
        border-radius: 10px 10px 0 0;
    }

    td {
        background-color: #f9f9f9;
    }

    td:hover {
        background-color: #ffefef; /* Light pink hover effect */
        cursor: pointer;
    }

    /* Buttons Styling */
    .button {
        display: inline-block;
        padding: 15px 30px;
        background-color: #ffb6c1; /* Light Pink */
        color: white;
        border: none;
        font-size: 1.5rem;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s ease;
        margin-top: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .button:hover {
        background-color: #ff6f8e; /* Darker Pink */
        transform: scale(1.05); /* Hover scale effect */
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
    }

    .button:active {
        transform: scale(0.98);
    }

    /* Action Buttons Styling */
    .action-button {
        padding: 15px 40px;
        font-size: 1.5rem;
        font-weight: bold;
        background-color: #6ba9e2; /* Light Blue */
        border-radius: 50px;
        color: white;
        text-decoration: none;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s ease;
    }

    .action-button:hover {
        background-color: #4f8dc3; /* Darker Blue */
        transform: scale(1.05);
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
    }

    .action-button:active {
        transform: scale(0.98);
    }

    /* Table Responsive */
    .table-responsive {
        margin-top: 20px;
        overflow-x: auto;
    }
</style>

<div class="packages index content">
    <h3><?= __('InkyWinky Customer List Orders') ?></h3>
    
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Name_id') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th> 
                    <th><?= $this->Paginator->sort('package_cover_id') ?></th>
                    <th><?= $this->Paginator->sort('package_colour_id') ?></th>
                    <th><?= $this->Paginator->sort('package_desc') ?></th>
                    <th><?= $this->Paginator->sort('pickup_date') ?></th>
                    <th><?= $this->Paginator->sort('pickup_time') ?></th>
                    <th><?= $this->Paginator->sort('File') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($packages as $package): ?>
                    <tr>
                        <td><?= $package->hasValue('cus') ? $this->Html->link($package->cus->cus_fname, ['controller' => 'Customers', 'action' => 'view', $package->cus->cus_id]) : '' ?></td>
                        <td><?= $package->hasValue('cus') ? h($package->cus->cus_email) : '' ?></td>
                        <td><?= $package->hasValue('package_cover') ? $this->Html->link($package->package_cover->cover_types, ['controller' => 'PackageCovers', 'action' => 'view', $package->package_cover->package_cover_id]) : '' ?></td>
                        <td><?= $package->hasValue('package_colour') ? $this->Html->link($package->package_colour->colour_types, ['controller' => 'PackageColours', 'action' => 'view', $package->package_colour->package_colour_id]) : '' ?></td>
                        <td><?= h($package->package_desc) ?></td>
                        <td><?= h($package->pickup_date) ?></td>
                        <td><?= h($package->pickup_time) ?></td>
                        <td>
                            <?php if (!empty($package->package_file)): ?>
                                <?= $this->Html->link('Download', '/uploads/' . h($package->package_file), ['target' => '_blank']) ?>
                            <?php else: ?>
                                <em>No file</em>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?= $this->Html->link(('Back'), ['controller' => 'dashboard'],['action' => 'index'], ['class' => 'side-nav-item']) ?> 
    </div>
</div>