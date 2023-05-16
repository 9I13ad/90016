<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donoridentitydocument $donoridentitydocument
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $donoridentitydocument->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $donoridentitydocument->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Donoridentitydocument'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donoridentitydocument form content">
            <?= $this->Form->create($donoridentitydocument) ?>
            <fieldset>
                <legend><?= __('Edit Donoridentitydocument') ?></legend>
                <?php
                    echo $this->Form->control('DonorID');
                    echo $this->Form->control('DocumentType');
                    echo $this->Form->control('DocumentNumber');
                    echo $this->Form->control('ExpiryDate', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
