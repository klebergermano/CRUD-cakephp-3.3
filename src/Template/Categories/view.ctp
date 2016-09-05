<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Menu</li>
        <li><?= $this->Html->link(__('Editar Categoria'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Categoria'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Categoria'), ['action' => 'add']) ?> </li>
        <!--<li><?= $this->Html->link(__('Listar Categoria Relacionada'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('New Parent Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li> -->
        <li><?= $this->Html->link(__('Postagens'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Postagem'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Category') ?></th>
            <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->name, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($category->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição') ?></th>
            <td><?= h($category->description) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Creado em') ?></th>
            <td><?= h(date('d/m/Y H:i:s',strtotime($category->created))) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Útima Modificação') ?></th>
            <td><?= h(date('d/m/Y H:i:s', strtotime($category->modified))) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Categories Relacionadas') ?></h4>
        <?php if (!empty($category->child_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __(' ID Relacionado ') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Descrição') ?></th>
                <th scope="col"><?= __('Creado em') ?></th>
                <th scope="col"><?= __('Útima Modificação') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($category->child_categories as $childCategories): ?>
            <tr>
                <td><?= h($childCategories->id) ?></td>
                <td><?= h($childCategories->parent_id) ?></td>
                <td><?= h($childCategories->name) ?></td>
                <td><?= h($childCategories->description) ?></td>
                <td><?= h(date('d/m/Y H:m',strtotime($childCategories->created))) ?></td>
                <td><?= h(date('d/m/Y H:m',strtotime($childCategories->modified))) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?> |
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->id]) ?> |
                    <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Categories', 'action' => 'delete', $childCategories->id], ['confirm' => __('Você realmente deseja deletar # {0}?', $childCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Postagens Relacionadas') ?></h4>
        <?php if (!empty($category->posts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __('Título') ?></th>
                <th scope="col"><?= __('Postagem') ?></th>
                <th scope="col"><?= __('Categoria ID') ?></th>
                <th scope="col"><?= __('Creado') ?></th>
                <th scope="col"><?= __('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($category->posts as $posts): ?>
            <tr>
                <td><?= h($posts->id) ?></td>
                <td><?= h($posts->title) ?></td>
                <td><?= h($posts->body) ?></td>
                <td><?= h($posts->category_id) ?></td>
                <td><?= h(date('d/m/Y H:i', strtotime($posts->created))) ?></td>
                <td><?= h(date('d/m/Y H:i', strtotime($posts->modified))) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Você realmente deseja deletar # {0}?', $posts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
