<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aiditem> $aiditem
 */
?>
<div class="aiditem index content">
    <?= $this->Html->link(__('New Aiditem'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aiditem') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('ItemName') ?></th>
                    <th><?= $this->Paginator->sort('CategoryID') ?></th>
                    <th><?= $this->Paginator->sort('Quantity') ?></th>
                    <th><?= $this->Paginator->sort('ExpiryDate') ?></th>
                    <th><?= $this->Paginator->sort('Ingredients') ?></th>
                    <th><?= $this->Paginator->sort('AllergenInfo') ?></th>
                    <th><?= $this->Paginator->sort('ManufacturerBrand') ?></th>
                    <th><?= $this->Paginator->sort('ClothingSize') ?></th>
                    <th><?= $this->Paginator->sort('AidKitID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aiditem as $aiditem): ?>
                <tr>
                    <td><?= $this->Number->format($aiditem->ID) ?></td>
                    <td><?= h($aiditem->ItemName) ?></td>
                    <td><?= $aiditem->CategoryID === null ? '' : $this->Number->format($aiditem->CategoryID) ?></td>
                    <td><?= $aiditem->Quantity === null ? '' : $this->Number->format($aiditem->Quantity) ?></td>
                    <td><?= h($aiditem->ExpiryDate) ?></td>
                    <td><?= h($aiditem->Ingredients) ?></td>
                    <td><?= h($aiditem->AllergenInfo) ?></td>
                    <td><?= h($aiditem->ManufacturerBrand) ?></td>
                    <td><?= h($aiditem->ClothingSize) ?></td>
                    <td><?= $aiditem->AidKitID === null ? '' : $this->Number->format($aiditem->AidKitID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aiditem->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aiditem->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aiditem->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $aiditem->ID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
