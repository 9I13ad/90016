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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aidcategory->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aidcategory->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aidcategory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aidcategory form content">
            <?= $this->Form->create($aidcategory) ?>
            <fieldset>
                <legend><?= __('Edit Aidcategory') ?></legend>
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
