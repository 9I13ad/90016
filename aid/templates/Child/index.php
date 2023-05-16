<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Child> $child
 */
?>
<div class="child index content">
    <?= $this->Html->link(__('New Child'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Child') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('Recipient name') ?></th>
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Age') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($child as $child): ?>
                <tr>
                    <td><?= $this->Number->format($child->ID) ?></td>
                    <td><?php
                        if ($child->RecipientID !== null) {
                            $recipient = isset($recipients[$child->RecipientID]) ? $recipients[$child->RecipientID] : '';
                            echo h($recipient);
                        }
                        ?></td>
                    <td><?= h($child->Name) ?></td>
                    <td><?= $child->Age === null ? '' : $this->Number->format($child->Age) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $child->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $child->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $child->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $child->ID)]) ?>
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
