<article class="pizza">
    <span class="pizza__image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></span>
    <div class="pizza__text">
        <h3 class="pizza__name"><?php the_title(); ?></h3>
        <div class="pizza__meta">
            <ul>
                <?php get_pizza_ingredients(get_the_ID()); ?>
            </ul>
            <strong><?= get_pizza_price(get_the_ID());?></strong>
        </div>
    </div>
</article>