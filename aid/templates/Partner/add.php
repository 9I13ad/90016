<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partner $partner
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Partner'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="partner form content">
            <?= $this->Form->create($partner) ?>
            <fieldset>
                <legend><?= __('Add Partner') ?></legend>
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
