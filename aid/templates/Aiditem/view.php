<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aiditem $aiditem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aiditem'), ['action' => 'edit', $aiditem->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aiditem'), ['action' => 'delete', $aiditem->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $aiditem->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aiditem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aiditem'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aiditem view content">
            <h3><?= h($aiditem->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('ItemName') ?></th>
                    <td><?= h($aiditem->ItemName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingredients') ?></th>
                    <td><?= h($aiditem->Ingredients) ?></td>
                </tr>
                <tr>
                    <th><?= __('AllergenInfo') ?></th>
                    <td><?= h($aiditem->AllergenInfo) ?></td>
                </tr>
                <tr>
                    <th><?= __('ManufacturerBrand') ?></th>
                    <td><?= h($aiditem->ManufacturerBrand) ?></td>
                </tr>
                <tr>
                    <th><?= __('ClothingSize') ?></th>
                    <td><?= h($aiditem->ClothingSize) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($aiditem->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CategoryID') ?></th>
                    <td><?= $aiditem->CategoryID === null ? '' : $this->Number->format($aiditem->CategoryID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $aiditem->Quantity === null ? '' : $this->Number->format($aiditem->Quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('AidKitID') ?></th>
                    <td><?= $aiditem->AidKitID === null ? '' : $this->Number->format($aiditem->AidKitID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ExpiryDate') ?></th>
                    <td><?= h($aiditem->ExpiryDate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
