<?php
/*
Template name: Шаблон страницы с мозаикой
*/
?>
<?php
get_header();
?>


<main class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <sidebar class="sidebar-menu">
                    <a href="/catalog/">Плитка</a>
                    <a href="/catalog/mozaika/">Мозаика</a>
                    <a href="#">Панели декоративные</a>
                </sidebar>
            </div>
            <div class="col-md-9">
                <?php
                $query = new WP_Query('category_name=mozai', 'posts_per_page=30');
                while ($query->have_posts()){
                $query->the_post();
                ?>
                <div class="catalog-item">
                    <h2><?php the_title()?></h2>
                    <p><?php the_field('goods_name', get_the_ID())?></p>
                    <p><?php the_field('goods_id', get_the_ID())?></p>
                    <img src="<?php echo the_field('goods_thumbnail', get_the_ID())?>" alt="миниатюра продукта">
                    <img src="<?php echo the_field('goods_photo1', get_the_ID())?>" alt="фото продукта" class="item-pic">
                    <img src="<?php echo the_field('goods_photo2', get_the_ID())?>" alt="" class="item-pic">
                </div>
                    <?php
                }
                ?>
            </div>
        </div>

    </div>
</main>

<?php
get_footer();
?>
