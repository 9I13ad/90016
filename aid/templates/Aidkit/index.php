<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aidkit> $aidkit
 */
?>
<div class="aidkit index content">
    <?= $this->Html->link(__('New Aidkit'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aidkit') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('KitName') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aidkit as $aidkit): ?>
                <tr>
                    <td><?= $this->Number->format($aidkit->ID) ?></td>
                    <td><?= h($aidkit->KitName) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aidkit->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aidkit->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aidkit->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $aidkit->ID)]) ?>
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
