<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Menu</li>
        <li><?= $this->Html->link(__('Nova Categoria'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Postagens'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Postagem'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories index large-9 medium-8 columns content">
    <h3>Categorias</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', 'ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id', 'Relacionado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name', 'Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description', 'Descrição') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', 'Creado em') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', 'Última Modificação') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->name, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
                <td><?= h($category->name) ?></td>
                <td><?= h($category->description) ?></td>
                <td><?= h(date('d/m/Y H:m' , strtotime($category->created))) ?></td>
                <td><?= h(date('d/m/Y H:m', strtotime($category->modified))) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $category->id]) ?> |
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $category->id]) ?> |
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $category->id], ['confirm' => __('Você realmente deseja deletar # {0}?', $category->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter('Página {{page}} de {{page}}') ?></p>
    </div>
</div>
