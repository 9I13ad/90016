<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Child $child
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $child->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $child->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Child'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="child form content">
            <?= $this->Form->create($child) ?>
            <fieldset>
                <legend><?= __('Edit Child') ?></legend>
                <?php
                    echo $this->Form->control('RecipientID');
                    echo $this->Form->control('Name');
                    echo $this->Form->control('Age');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
