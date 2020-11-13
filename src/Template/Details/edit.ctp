<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detail $detail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $detail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="details form large-9 medium-8 columns content">
    <?= $this->Form->create($detail) ?>
    <fieldset>
        <legend><?= __('Edit Detail') ?></legend>
        <?php
            echo $this->Form->control('departament');
            echo $this->Form->control('city');
            echo $this->Form->control('neighborhood');
            echo $this->Form->control('address');
            echo $this->Form->control('telephone');
            echo $this->Form->control('email');
            echo $this->Form->control('institution_id', ['options' => $institutions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
