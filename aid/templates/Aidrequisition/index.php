<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aidrequisition> $aidrequisition
 */
?>
<div class="aidrequisition index content">
    <?= $this->Html->link(__('New Aidrequisition'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aidrequisition') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('RecipientID') ?></th>
                    <th><?= $this->Paginator->sort('AidKitID') ?></th>
                    <th><?= $this->Paginator->sort('AidItemID') ?></th>
                    <th><?= $this->Paginator->sort('RequestedQuantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aidrequisition as $aidrequisition): ?>
                <tr>
                    <td><?= $this->Number->format($aidrequisition->ID) ?></td>
                    <td><?= $aidrequisition->RecipientID === null ? '' : $this->Number->format($aidrequisition->RecipientID) ?></td>
                    <td><?= $aidrequisition->AidKitID === null ? '' : $this->Number->format($aidrequisition->AidKitID) ?></td>
                    <td><?= $aidrequisition->AidItemID === null ? '' : $this->Number->format($aidrequisition->AidItemID) ?></td>
                    <td><?= $aidrequisition->RequestedQuantity === null ? '' : $this->Number->format($aidrequisition->RequestedQuantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aidrequisition->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aidrequisition->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aidrequisition->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $aidrequisition->ID)]) ?>
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
