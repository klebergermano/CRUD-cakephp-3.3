<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Menu</li>
        <li><?= $this->Html->link(__('Categorias'), ['action' => 'index']) ?></li>
       <!-- <li><?= $this->Html->link(__('Categories Relacionadas'), ['controller' => 'Categories', 'action' => 'index']) ?></li>-->
      <!--  <li><?= $this->Html->link(__('Nova Categoria Relacinada'), ['controller' => 'Categories', 'action' => 'add']) ?></li> -->
        <li><?= $this->Html->link(__('Postagens'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Postagem'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend>Adicionar Categoria</legend>
        <?php
            echo $this->Form->input('Categoria Relacionada', ['options' => $parentCategories]);
            echo $this->Form->input('name', array('label'=>'Nome'));
            echo $this->Form->input('description', array('label'=>'Descrição'));
        ?>
    </fieldset>
    <?= $this->Form->button('Salvar' , array('type'=>'submit')) ?>
    <?= $this->Form->end() ?>
</div>
