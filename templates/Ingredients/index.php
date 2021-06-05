<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient[]|\Cake\Collection\CollectionInterface $ingredients
 */
?>
<div class="header"> 
    <h1 class="page-header">
        <?= __('Ingredientes') ?>
    </h1>
</div>

<div id="page-inner">
    <?= $this->Html->link(__('Adicionar Ingrediente'), ['action' => 'add'], ['class' => 'waves-effect waves-light btn wandecos-color']) ?>
    
    <div class="card">
        <div class="card-content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('#') ?></th>
                            <th><?= $this->Paginator->sort('Nome') ?></th>
                            <th><?= $this->Paginator->sort('Qtd. Estoque') ?></th>
                            <th><?= $this->Paginator->sort('Ativo') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ingredients as $ingredient): ?>
                            <tr>
                                <td><?= $this->Number->format($ingredient->id) ?></td>
                                <td><?= h($ingredient->name) ?></td>
                                <td><?= $this->Number->format($ingredient->quantity) ?></td>
                                <td><?= ( $this->Number->format($ingredient->actived) == 1 ) ? 'SIM' : 'NÃO' ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('visualizar'), ['action' => 'view', $ingredient->id]) ?>
                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ingredient->id]) ?>
                                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $ingredient->id], ['confirm' => __('Você realmente quer deletar o ID: {0}?', $ingredient->id)]) ?>
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