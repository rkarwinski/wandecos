<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient[]|\Cake\Collection\CollectionInterface $ingredients
 */
?>

<div class="header"> 
    <h1 class="page-header">
        <?= __('Produtos') ?>
    </h1>
</div>

<div id="page-inner">
    <?= $this->Html->link(__('Adicionar Produto'), ['action' => 'add'], ['class' => 'waves-effect waves-light btn wandecos-color']) ?>
    
    <div class="card">
        <div class="card-content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('#') ?></th>
                            <th><?= $this->Paginator->sort('Nome') ?></th>
                            <th><?= $this->Paginator->sort('Valor') ?></th>
                            <th><?= $this->Paginator->sort('Ativo') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= $this->Number->format($product->id) ?></td>
                            <td><?= h($product->name) ?></td>
                            <td><?= 'R$ ' . $this->Number->format($product->value) ?></td>
                            <td><?= ($this->Number->format($product->actived) == 1 ) ? 'SIM' : 'NÃO' ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $product->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $product->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $product->id], ['confirm' => __('Você realmente quer deletar o ID: {0}?', $product->id)]) ?>
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