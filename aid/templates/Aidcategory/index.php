<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aidcategory> $aidcategory
 */
?>
<div class="aidcategory index content">
    <?= $this->Html->link(__('New Aidcategory'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aidcategory') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('CategoryName') ?></th>
                    <th><?= $this->Paginator->sort('InventoryStatus') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aidcategory as $aidcategory): ?>
                <tr>
                    <td><?= $this->Number->format($aidcategory->ID) ?></td>
                    <td><?= h($aidcategory->CategoryName) ?></td>
                    <td><?= h($aidcategory->InventoryStatus) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aidcategory->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aidcategory->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aidcategory->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $aidcategory->ID)]) ?>
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
