<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dashboard $dashboard
 * @var string[]|\Cake\Collection\CollectionInterface $packageColours
 * @var string[]|\Cake\Collection\CollectionInterface $packageCovers
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dashboard->dashboard_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dashboard->dashboard_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Dashboard'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="dashboard form content">
            <?= $this->Form->create($dashboard) ?>
            <fieldset>
                <legend><?= __('Edit Dashboard') ?></legend>
                <?php
                    echo $this->Form->control('package_colour_id', ['options' => $packageColours]);
                    echo $this->Form->control('package_cover_id', ['options' => $packageCovers]);
                    echo $this->Form->control('order_id', ['options' => $orders]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
