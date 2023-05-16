<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aidcategory $aidcategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Aidcategory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aidcategory form content">
            <?= $this->Form->create($aidcategory) ?>
            <fieldset>
                <legend><?= __('Add Aidcategory') ?></legend>
                <?php
                    echo $this->Form->control('CategoryName');
                    echo $this->Form->control('InventoryStatus');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
