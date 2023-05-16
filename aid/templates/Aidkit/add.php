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
            <?= $this->Html->link(__('List Aidkit'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aidkit form content">
            <?= $this->Form->create($aidkit) ?>
            <fieldset>
                <legend><?= __('Add Aidkit') ?></legend>
                <?php
                    echo $this->Form->control('KitName');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
