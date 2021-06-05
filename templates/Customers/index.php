<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient[]|\Cake\Collection\CollectionInterface $ingredients
 */
?>

<div class="header"> 
    <h1 class="page-header">
        <?= __('Clientes') ?>
    </h1>
</div>

<div id="page-inner">
    <?= $this->Html->link(__('Adicionar Cliente'), ['action' => 'add'], ['class' => 'waves-effect waves-light btn wandecos-color']) ?>
    
    <div class="card">
        <div class="card-content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= h('#') ?></th>
                            <th><?= $this->Paginator->sort('Nome') ?></th>
                            <th><?= $this->Paginator->sort('Telefone') ?></th>
                            <th><?= $this->Paginator->sort('Data de Cadastro') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($customers as $customer): ?>
                        <tr>
                            <td><?= $this->Number->format($customer->id) ?></td>
                            <td><?= h($customer->name) ?></td>
                            <td><?= h($customer->phone) ?></td>
                            <td><?= h($customer->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $customer->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $customer->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $customer->id], ['confirm' => __('Você realmente quer deletar o ID: {0}?', $customer->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, Exibindo {{current}} registro(s) de um total de {{count}}')) ?></p>
                </div>
            </div>
        </div>
    </div>

</div>