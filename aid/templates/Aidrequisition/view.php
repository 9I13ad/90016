<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aidrequisition $aidrequisition
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aidrequisition'), ['action' => 'edit', $aidrequisition->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aidrequisition'), ['action' => 'delete', $aidrequisition->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $aidrequisition->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aidrequisition'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aidrequisition'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aidrequisition view content">
            <h3><?= h($aidrequisition->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($aidrequisition->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('RecipientID') ?></th>
                    <td><?= $aidrequisition->RecipientID === null ? '' : $this->Number->format($aidrequisition->RecipientID) ?></td>
                </tr>
                <tr>
                    <th><?= __('AidKitID') ?></th>
                    <td><?= $aidrequisition->AidKitID === null ? '' : $this->Number->format($aidrequisition->AidKitID) ?></td>
                </tr>
                <tr>
                    <th><?= __('AidItemID') ?></th>
                    <td><?= $aidrequisition->AidItemID === null ? '' : $this->Number->format($aidrequisition->AidItemID) ?></td>
                </tr>
                <tr>
                    <th><?= __('RequestedQuantity') ?></th>
                    <td><?= $aidrequisition->RequestedQuantity === null ? '' : $this->Number->format($aidrequisition->RequestedQuantity) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aidrequisition->Notes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
