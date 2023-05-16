<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aidrequisition $aidrequisition
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aidrequisition->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aidrequisition->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aidrequisition'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aidrequisition form content">
            <?= $this->Form->create($aidrequisition) ?>
            <fieldset>
                <legend><?= __('Edit Aidrequisition') ?></legend>
                <?php
                    echo $this->Form->control('RecipientID');
                    echo $this->Form->control('AidKitID');
                    echo $this->Form->control('AidItemID');
                    echo $this->Form->control('RequestedQuantity');
                    echo $this->Form->control('Notes');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
