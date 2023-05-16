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
            <?= $this->Html->link(__('Edit Partner'), ['action' => 'edit', $partner->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Partner'), ['action' => 'delete', $partner->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $partner->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Partner'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Partner'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="partner view content">
            <h3><?= h($partner->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($partner->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($partner->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('RecipientID') ?></th>
                    <td><?= $partner->RecipientID === null ? '' : $this->Number->format($partner->RecipientID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $partner->Age === null ? '' : $this->Number->format($partner->Age) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
