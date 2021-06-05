<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerAddress[]|\Cake\Collection\CollectionInterface $customerAddresses
 */
?>
<div class="customerAddresses index content">
    <?= $this->Html->link(__('New Customer Address'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customer Addresses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_customer') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('number') ?></th>
                    <th><?= $this->Paginator->sort('street') ?></th>
                    <th><?= $this->Paginator->sort('zip_code') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('complement') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customerAddresses as $customerAddress): ?>
                <tr>
                    <td><?= $this->Number->format($customerAddress->id) ?></td>
                    <td><?= $this->Number->format($customerAddress->id_customer) ?></td>
                    <td><?= h($customerAddress->city) ?></td>
                    <td><?= $this->Number->format($customerAddress->number) ?></td>
                    <td><?= h($customerAddress->street) ?></td>
                    <td><?= h($customerAddress->zip_code) ?></td>
                    <td><?= h($customerAddress->created) ?></td>
                    <td><?= h($customerAddress->complement) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customerAddress->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerAddress->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerAddress->id)]) ?>
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
