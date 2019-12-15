<main class="container-article">
    <section class="article">
    <div class="article__image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <div class="article__text">
            <h1 class="article__name"><?php the_title();?></h1>
            <!-- <strong>Ingrédients:</strong>
            <p>Tomate, Mozzarella, Jambon, Ananas, Maïs</p>
            </br>
            <strong><em>Prix: 12.50€</em></strong> -->
            <p><?php the_content(); ?></p>
        </div>
    </section>
</main>