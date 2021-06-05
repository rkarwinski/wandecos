<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerAddress $customerAddress
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customer Address'), ['action' => 'edit', $customerAddress->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer Address'), ['action' => 'delete', $customerAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerAddress->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customer Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer Address'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customerAddresses view content">
            <h3><?= h($customerAddress->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($customerAddress->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street') ?></th>
                    <td><?= h($customerAddress->street) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zip Code') ?></th>
                    <td><?= h($customerAddress->zip_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complement') ?></th>
                    <td><?= h($customerAddress->complement) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($customerAddress->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Customer') ?></th>
                    <td><?= $this->Number->format($customerAddress->id_customer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number') ?></th>
                    <td><?= $this->Number->format($customerAddress->number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($customerAddress->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
