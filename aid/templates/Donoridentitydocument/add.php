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
            <?= $this->Html->link(__('List Donoridentitydocument'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donoridentitydocument form content">
            <?= $this->Form->create($donoridentitydocument) ?>
            <fieldset>
                <legend><?= __('Add Donoridentitydocument') ?></legend>
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
