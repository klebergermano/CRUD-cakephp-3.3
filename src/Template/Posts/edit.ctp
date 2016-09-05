<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->id],
                ['confirm' => __('Deseja realmentede deletar a postagem # {0}?', $post->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Postagens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Categorias'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Categoria'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend>Editar Postagem</legend>
        <?php
            echo $this->Form->input('title', array("label"=>"Título"));
            echo $this->Form->input('body', array("label"=>"Postagem"));
            echo $this->Form->input('category_id', array("label"=>"Categoria"), ['options' => $categories]);
        ?>
    </fieldset>
    <?= $this->Form->button("Salvar", array("type"=> "submit")) ?>
    <?= $this->Form->end() ?>
</div>
