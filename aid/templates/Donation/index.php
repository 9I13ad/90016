<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Donation> $donation
 */
?>
<div class="donation index content">
    <?= $this->Html->link(__('New Donation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donation') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('DonorID') ?></th>
                    <th><?= $this->Paginator->sort('AidItemID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donation as $donation): ?>
                <tr>
                    <td><?= $this->Number->format($donation->ID) ?></td>
                    <td><?= $donation->DonorID === null ? '' : $this->Number->format($donation->DonorID) ?></td>
                    <td><?= $donation->AidItemID === null ? '' : $this->Number->format($donation->AidItemID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $donation->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donation->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $donation->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $donation->ID)]) ?>
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
