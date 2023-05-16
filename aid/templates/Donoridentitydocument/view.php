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
            <?= $this->Html->link(__('Edit Donoridentitydocument'), ['action' => 'edit', $donoridentitydocument->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donoridentitydocument'), ['action' => 'delete', $donoridentitydocument->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $donoridentitydocument->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donoridentitydocument'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donoridentitydocument'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donoridentitydocument view content">
            <h3><?= h($donoridentitydocument->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('DocumentType') ?></th>
                    <td><?= h($donoridentitydocument->DocumentType) ?></td>
                </tr>
                <tr>
                    <th><?= __('DocumentNumber') ?></th>
                    <td><?= h($donoridentitydocument->DocumentNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($donoridentitydocument->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('DonorID') ?></th>
                    <td><?= $donoridentitydocument->DonorID === null ? '' : $this->Number->format($donoridentitydocument->DonorID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ExpiryDate') ?></th>
                    <td><?= h($donoridentitydocument->ExpiryDate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
