<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Menu</li>
        <li><?= $this->Html->link(__('Editar Postagem'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Postagem'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('Postagens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Postagem'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Categorias'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Categoria'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->title) ?></h3>
    <table class="vertical-table">
             <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Título') ?></th>
            <td><?= h($post->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $post->has('category') ? $this->Html->link($post->category->name, ['controller' => 'Categories', 'action' => 'view', $post->category->id]) : '' ?></td>
        </tr>
   
        <tr>
            <th scope="row"><?= __('Criado em') ?></th>
            <td><?= h(date('d/m/Y H:i:s', strtotime($post->created))) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Última Modificação') ?></th>
            <td><?= h(date('d/m/Y H:i:s', strtotime( $post->modified))) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Postagem') ?></h4>
        <?= $this->Text->autoParagraph(h($post->body)); ?>
    </div>
</div>
