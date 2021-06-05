<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Add Order') ?></legend>
                <?php
                    echo $this->Form->control('id_customer');
                    echo $this->Form->control('id_address');
                    echo $this->Form->control('total');
                    echo $this->Form->control('products_value');
                    echo $this->Form->control('delivery_value');
                    echo $this->Form->control('delivery_time');
                    echo $this->Form->control('delivery_forecast', ['empty' => true]);
                    echo $this->Form->control('delivered');
                    echo $this->Form->control('note');
                    echo $this->Form->control('discount');
                    echo $this->Form->control('products._ids', ['options' => $products]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
