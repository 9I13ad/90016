<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Recipient> $recipient
 */
?>
<div class="recipient index content">
    <?= $this->Html->link(__('New Recipient'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Recipient') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('Age') ?></th>
                    <th><?= $this->Paginator->sort('PreviousAddress') ?></th>
                    <th><?= $this->Paginator->sort('TotalFamilyMembers') ?></th>
                    <th><?= $this->Paginator->sort('Nationality') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipient as $recipient): ?>
                <tr>
                    <td><?= $this->Number->format($recipient->id) ?></td>
                    <td><?= h($recipient->name) ?></td>
                    <td><?= $this->Number->format($recipient->Age) ?></td>
                    <td><?= h($recipient->PreviousAddress) ?></td>
                    <td><?= $this->Number->format($recipient->TotalFamilyMembers) ?></td>
                    <td><?= h($recipient->Nationality) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $recipient->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipient->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipient->id)]) ?>
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
