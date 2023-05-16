<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aidkit $aidkit
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aidkit'), ['action' => 'edit', $aidkit->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aidkit'), ['action' => 'delete', $aidkit->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $aidkit->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aidkit'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aidkit'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aidkit view content">
            <h3><?= h($aidkit->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('KitName') ?></th>
                    <td><?= h($aidkit->KitName) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($aidkit->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
