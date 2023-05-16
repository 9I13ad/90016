<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipient $recipient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Recipient'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="recipient form content">
            <?= $this->Form->create($recipient) ?>
            <fieldset>
                <legend><?= __('Add Recipient') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('Age');
                    echo $this->Form->control('PreviousAddress');
                    echo $this->Form->control('TotalFamilyMembers');
                    echo $this->Form->control('Nationality');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
