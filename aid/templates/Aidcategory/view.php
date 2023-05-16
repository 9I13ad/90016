<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aidcategory $aidcategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aidcategory'), ['action' => 'edit', $aidcategory->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aidcategory'), ['action' => 'delete', $aidcategory->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $aidcategory->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aidcategory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aidcategory'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aidcategory view content">
            <h3><?= h($aidcategory->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('CategoryName') ?></th>
                    <td><?= h($aidcategory->CategoryName) ?></td>
                </tr>
                <tr>
                    <th><?= __('InventoryStatus') ?></th>
                    <td><?= h($aidcategory->InventoryStatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($aidcategory->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
