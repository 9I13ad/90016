<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Partner> $partner
 */
?>
<div class="partner index content">
    <?= $this->Html->link(__('New Partner'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Partner') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('RecipientID') ?></th>
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Age') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($partner as $partner): ?>
                <tr>
                    <td><?= $this->Number->format($partner->ID) ?></td>
                    <td><?= $partner->RecipientID === null ? '' : $this->Number->format($partner->RecipientID) ?></td>
                    <td><?= h($partner->Name) ?></td>
                    <td><?= $partner->Age === null ? '' : $this->Number->format($partner->Age) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $partner->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partner->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $partner->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $partner->ID)]) ?>
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
