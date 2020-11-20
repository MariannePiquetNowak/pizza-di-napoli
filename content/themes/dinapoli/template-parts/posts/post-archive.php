<article class="article">
    <div class="article__image">
        <img src="<?php the_post_thumbnail(); ?>" alt="image-1">
    </div>
    <div class="article__text">
        <h1 class="article__name"><?php the_title(); ?></h1>
        <p>: <?= get_pizza_ingredients(); ?></p>
    </br>
    <strong><em><?= get_pizza_price();?></em></strong>
    </div>
</article>