<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 * @var string[]|\Cake\Collection\CollectionInterface $packageColours
 * @var string[]|\Cake\Collection\CollectionInterface $packageCovers
 * @var string[]|\Cake\Collection\CollectionInterface $paymentMethods
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $admin->admin_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $admin->admin_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Admin'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="admin form content">
            <?= $this->Form->create($admin) ?>
            <fieldset>
                <legend><?= __('Edit Admin') ?></legend>
                <?php
                    echo $this->Form->control('admin_fname');
                    echo $this->Form->control('admin_email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('admin_phonenumber');
                    echo $this->Form->control('order_id', ['options' => $orders]);
                    echo $this->Form->control('package_colour_id', ['options' => $packageColours]);
                    echo $this->Form->control('package_cover_id', ['options' => $packageCovers]);
                    echo $this->Form->control('payment_method_id', ['options' => $paymentMethods]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
