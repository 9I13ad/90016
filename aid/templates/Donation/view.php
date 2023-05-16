<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donation $donation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Donation'), ['action' => 'edit', $donation->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donation'), ['action' => 'delete', $donation->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $donation->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donation'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donation view content">
            <h3><?= h($donation->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($donation->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('DonorID') ?></th>
                    <td><?= $donation->DonorID === null ? '' : $this->Number->format($donation->DonorID) ?></td>
                </tr>
                <tr>
                    <th><?= __('AidItemID') ?></th>
                    <td><?= $donation->AidItemID === null ? '' : $this->Number->format($donation->AidItemID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
