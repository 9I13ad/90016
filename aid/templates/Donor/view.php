<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donor $donor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Donor'), ['action' => 'edit', $donor->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donor'), ['action' => 'delete', $donor->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $donor->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donor view content">
            <h3><?= h($donor->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($donor->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('MailingAddress') ?></th>
                    <td><?= h($donor->MailingAddress) ?></td>
                </tr>
                <tr>
                    <th><?= __('PhoneNumber') ?></th>
                    <td><?= h($donor->PhoneNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($donor->Email) ?></td>
                </tr>
                <tr>
                    <th><?= __('PreferredModeOfCommunication') ?></th>
                    <td><?= h($donor->PreferredModeOfCommunication) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nationality') ?></th>
                    <td><?= h($donor->Nationality) ?></td>
                </tr>
                <tr>
                    <th><?= __('ABN') ?></th>
                    <td><?= h($donor->ABN) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($donor->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $donor->Age === null ? '' : $this->Number->format($donor->Age) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
