<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Donor> $donor
 */
?>
<div class="donor index content">
    <?= $this->Html->link(__('New Donor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Age') ?></th>
                    <th><?= $this->Paginator->sort('MailingAddress') ?></th>
                    <th><?= $this->Paginator->sort('PhoneNumber') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('PreferredModeOfCommunication') ?></th>
                    <th><?= $this->Paginator->sort('Nationality') ?></th>
                    <th><?= $this->Paginator->sort('ABN') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donor as $donor): ?>
                <tr>
                    <td><?= $this->Number->format($donor->ID) ?></td>
                    <td><?= h($donor->Name) ?></td>
                    <td><?= $donor->Age === null ? '' : $this->Number->format($donor->Age) ?></td>
                    <td><?= h($donor->MailingAddress) ?></td>
                    <td><?= h($donor->PhoneNumber) ?></td>
                    <td><?= h($donor->Email) ?></td>
                    <td><?= h($donor->PreferredModeOfCommunication) ?></td>
                    <td><?= h($donor->Nationality) ?></td>
                    <td><?= h($donor->ABN) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $donor->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donor->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $donor->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $donor->ID)]) ?>
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
