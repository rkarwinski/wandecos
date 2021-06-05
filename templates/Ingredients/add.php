<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient $ingredient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ingredients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ingredients form content">
            <?= $this->Form->create($ingredient) ?>
            <fieldset>
                <legend><?= __('Add Ingredient') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('actived');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
