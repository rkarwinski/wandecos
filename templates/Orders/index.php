<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient[]|\Cake\Collection\CollectionInterface $ingredients
 */
?>

<div class="header"> 
    <h1 class="page-header">
        <?= __('Pedidos') ?>
    </h1>
</div>

<div id="page-inner">
    <?= $this->Html->link(__('Novo Pedido'), ['action' => 'add'], ['class' => 'waves-effect waves-light btn wandecos-color']) ?>
    
    <div class="card">
        <div class="card-content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= h('#') ?></th>
                            <th><?= $this->Paginator->sort('id_customer') //NOME CLIENTE ?></th>
                            <th><?= $this->Paginator->sort('Valor dos itens') ?></th>
                            <th><?= $this->Paginator->sort('Valor Tele-entrega') ?></th>
                            <th><?= $this->Paginator->sort('Valor do desconto') ?></th>
                            <th><?= $this->Paginator->sort('Valor total') ?></th>
                            <th><?= $this->Paginator->sort('Data Pedido') ?></th>
                            <th><?= $this->Paginator->sort('Tempo de entrega') ?></th>
                            <th><?= $this->Paginator->sort('Previsão de entrega') ?></th>
                            <th><?= $this->Paginator->sort('Entregue') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?= $this->Number->format($order->id) ?></td>
                            <td><?= $this->Number->format($order->id_customer) ?></td>
                            <td><?= $this->Number->format($order->products_value) ?></td>
                            <td><?= $this->Number->format($order->delivery_value) ?></td>
                            <td><?= $this->Number->format($order->discount) ?></td>
                            <td><?= $this->Number->format($order->total) ?></td>
                            <td><?= h($order->created) ?></td>
                            <td><?= $this->Number->format($order->delivery_time) ?></td>
                            <td><?= h($order->delivery_forecast) ?></td>
                            <td><?= $this->Number->format($order->delivered) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $order->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $order->id]) ?>
                                <p>Concluir</p>
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