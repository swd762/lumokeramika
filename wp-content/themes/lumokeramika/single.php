<?php

while (have_posts()) {
    the_post();
?>
    <h2><?php echo the_title();?></h2>

    <h3><?php echo the_field('goods_id', get_the_ID()); ?> </h3>

    <p>Миниатюра</p>

    <img src="<?php echo the_field('goods_thumbnail', get_the_ID())?>" alt="">
    
    <p>Фото интерьера</p>

    <img src="<?php echo the_field('goods_photo1', get_the_ID())?>" alt="">
    <img src="<?php echo the_field('goods_photo2', get_the_ID())?>" alt="">
<?php
}
?>
