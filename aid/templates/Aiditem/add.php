<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aiditem $aiditem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Aiditem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aiditem form content">
            <?= $this->Form->create($aiditem) ?>
            <fieldset>
                <legend><?= __('Add Aiditem') ?></legend>
                <?php
                    echo $this->Form->control('ItemName');
                    echo $this->Form->control('CategoryID');
                    echo $this->Form->control('Quantity');
                    echo $this->Form->control('ExpiryDate', ['empty' => true]);
                    echo $this->Form->control('Ingredients');
                    echo $this->Form->control('AllergenInfo');
                    echo $this->Form->control('ManufacturerBrand');
                    echo $this->Form->control('ClothingSize');
                    echo $this->Form->control('AidKitID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
