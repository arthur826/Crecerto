<aside id="sidebar" class="widget-area">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <div class="sidebar"> <h2>Categorias</h2> <ul> <?php $categories = get_categories(); foreach ($categories as $category) { echo '<li><a href="#" data-category-id="' . $category->term_id . '">' . $category->name . '</a></li>'; } ?> </ul> </div>
‌
    <?php endif; ?>
</aside>

