<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donation $donation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $donation->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $donation->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Donation'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donation form content">
            <?= $this->Form->create($donation) ?>
            <fieldset>
                <legend><?= __('Edit Donation') ?></legend>
                <?php
                    echo $this->Form->control('DonorID');
                    echo $this->Form->control('AidItemID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
