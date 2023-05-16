<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipient $recipient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Recipient'), ['action' => 'edit', $recipient->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Recipient'), ['action' => 'delete', $recipient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipient->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Recipient'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Recipient'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New child'), ['controller'=>'child','action' => 'add',$recipient->id], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="recipient view content">z
            <h3><?= h($recipient->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($recipient->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('PreviousAddress') ?></th>
                    <td><?= h($recipient->PreviousAddress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nationality') ?></th>
                    <td><?= h($recipient->Nationality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($recipient->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $this->Number->format($recipient->Age) ?></td>
                </tr>
                <tr>
                    <th><?= __('TotalFamilyMembers') ?></th>
                    <td><?= $this->Number->format($recipient->TotalFamilyMembers) ?></td>
                </tr>
            </table>
        </div>
        <div class="related">
            <h4><?= __('Children') ?></h4>
            <?php if (empty($children)): ?>
                <p><?= __('No children found.') ?></p >
            <?php else: ?>
                <div class="table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php


                        echo implode(",",$children)?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>


    </div>

</div>
