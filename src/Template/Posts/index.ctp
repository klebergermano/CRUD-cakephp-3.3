<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Menu</li>
        <li><?= $this->Html->link(__('Nova Postagem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Categorias'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Categoria'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts index large-9 medium-8 columns content">
    <h3>Postagens</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', 'ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title', 'Título') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id', 'Categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', 'Criado em') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', 'Última Modificação') ?></th>
                <th scope="col" class="actions">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $this->Number->format($post->id) ?></td>
                <td><?= h($post->title) ?></td>
                <td><?= $post->has('category') ? $this->Html->link($post->category->name, ['controller' => 'Categories', 'action' => 'view', $post->category->id]) : '' ?></td>
                
                <td><?= h(date('d/m/Y H:i', strtotime($post->created)))  ?></td>
                <td><?= h(date('d/m/Y H:i', strtotime($post->modified))) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $post->id]) ?> |
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $post->id]) ?> |
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $post->id], ['confirm' => __('Você realmente deseja deletar # {0}?', $post->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('próximo')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('anterior') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter( 'Página {{page}} de {{pages}}') ?></p>
    </div>
</div>
