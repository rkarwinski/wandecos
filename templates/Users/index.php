<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient[]|\Cake\Collection\CollectionInterface $ingredients
 */
?>

<div class="header"> 
    <h1 class="page-header">
        <?= __('Usuario') ?>
    </h1>
</div>

<div id="page-inner">
    <?= $this->Html->link(__('Adicionar Usuario'), ['action' => 'add'], ['class' => 'waves-effect waves-light btn wandecos-color']) ?>
    
    <div class="card">
        <div class="card-content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('#') ?></th>
                            <th><?= $this->Paginator->sort('Email') ?></th>
                            <th><?= $this->Paginator->sort('Nivel') ?></th>
                            <th><?= $this->Paginator->sort('Data Cadastro') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= h($user->id) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->role) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['confirm' => __('Você realmente quer deletar o ID: {0}?', $user->id)]) ?>
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