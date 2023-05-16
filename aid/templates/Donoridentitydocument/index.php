<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Donoridentitydocument> $donoridentitydocument
 */
?>
<div class="donoridentitydocument index content">
    <?= $this->Html->link(__('New Donoridentitydocument'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donoridentitydocument') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('DonorID') ?></th>
                    <th><?= $this->Paginator->sort('DocumentType') ?></th>
                    <th><?= $this->Paginator->sort('DocumentNumber') ?></th>
                    <th><?= $this->Paginator->sort('ExpiryDate') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donoridentitydocument as $donoridentitydocument): ?>
                <tr>
                    <td><?= $this->Number->format($donoridentitydocument->ID) ?></td>
                    <td><?= $donoridentitydocument->DonorID === null ? '' : $this->Number->format($donoridentitydocument->DonorID) ?></td>
                    <td><?= h($donoridentitydocument->DocumentType) ?></td>
                    <td><?= h($donoridentitydocument->DocumentNumber) ?></td>
                    <td><?= h($donoridentitydocument->ExpiryDate) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $donoridentitydocument->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donoridentitydocument->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $donoridentitydocument->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $donoridentitydocument->ID)]) ?>
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
