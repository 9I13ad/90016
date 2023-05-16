<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donor $donor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $donor->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $donor->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Donor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donor form content">
            <?= $this->Form->create($donor) ?>
            <fieldset>
                <legend><?= __('Edit Donor') ?></legend>
                <?php
                    echo $this->Form->control('Name');
                    echo $this->Form->control('Age');
                    echo $this->Form->control('MailingAddress');
                    echo $this->Form->control('PhoneNumber');
                    echo $this->Form->control('Email');
                    echo $this->Form->control('PreferredModeOfCommunication');
                    echo $this->Form->control('Nationality');
                    echo $this->Form->control('ABN');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
