<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Child $child
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Child'), ['action' => 'edit', $child->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Child'), ['action' => 'delete', $child->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $child->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Child'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Child'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="child view content">
            <h3><?= h($child->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($child->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($child->ID) ?></td>
                </tr>
                <tr>
                    <?php
                    if ($child->RecipientID !== null) {
                        $recipient = $recipients[$child->RecipientID] ?? '';
                        echo h($recipient);
                    }
                    ?>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $child->Age === null ? '' : $this->Number->format($child->Age) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
