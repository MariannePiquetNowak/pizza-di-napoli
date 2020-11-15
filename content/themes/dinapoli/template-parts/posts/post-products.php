<main class="container-article">
    <section class="article">
    <div class="article__image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <div class="article__text">
            <h1 class="article__name"><?php the_title();?></h1>
            <p><?php the_content(); ?></p>
        </div>
    </section>
</main>