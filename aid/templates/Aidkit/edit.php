<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aidkit $aidkit
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aidkit->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aidkit->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aidkit'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aidkit form content">
            <?= $this->Form->create($aidkit) ?>
            <fieldset>
                <legend><?= __('Edit Aidkit') ?></legend>
                <?php
                    echo $this->Form->control('KitName');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
