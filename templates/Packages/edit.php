<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Package $package
 * @var \Cake\Collection\CollectionInterface|string[] $packageColours
 * @var \Cake\Collection\CollectionInterface|string[] $packageCovers
 */
?>

<div class="package-form-container">
    <div class="form-header">Edit Package</div>

    <?= $this->Form->create($package, ['type' => 'file']) ?>

    <div class="form-grid">
        <?= $this->Form->control('package_file', ['type' => 'file']) ?>
        <?= $this->Form->control('package_cover_id', ['options' => $packageCovers, 'empty' => 'Select Cover']) ?>
        <?= $this->Form->control('package_colour_id', ['options' => $packageColours, 'empty' => 'Select Colour']) ?>
        <?= $this->Form->control('package_desc') ?>
        <?= $this->Form->control('pickup_date') ?>
        <?= $this->Form->control('pickup_time') ?>
    </div>

    <div class="form-button-wrap">
        <?= $this->Form->button(__('Update'), ['class' => 'form-submit-button']) ?>
    </div>

    <?= $this->Form->end() ?>
</div>

<style>
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #e1f0ff, #ffe0ec);
}
.package-form-container {
    max-width: 700px;
    margin: 50px auto;
    padding: 40px 30px;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
}
.form-header {
    text-align: center;
    font-size: 20px;
    font-weight: 100;
    color: #0a0b0c;
    margin-bottom: 25px;
}
.form-grid {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
input[type="text"],
input[type="file"],
input[type="date"],
input[type="time"],
select,
textarea {
    width: 100%;
    padding: 10px 16px;
    font-size: 16px;
    border: 1.5px solid #ccc;
    border-radius: 10px;
    transition: all 0.3s ease;
    background-color: white;
}
input:focus,
select:focus,
textarea:focus {
    border-color: #79c0ff;
    outline: none;
    box-shadow: 0 0 6px rgba(121, 192, 255, 0.5);
}
.form-button-wrap {
    text-align: center;
    margin-top: 30px;
}
.form-submit-button {
    background: #ff859fff;
    color: #fff;
    font-size: 13px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    transition: 0.3s ease;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
}
.form-submit-button:hover {
    transform: translateY(-3px);
    background: linear-gradient(135deg, #ffb7c7ff);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
}
@media (max-width: 768px) {
    .package-form-container {
        padding: 25px 20px;
        margin: 30px 15px;
    }
    .form-header {
        font-size: 22px;
    }
    .form-submit-button {
        width: 100%;
    }
}
</style>
