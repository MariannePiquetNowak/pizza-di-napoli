<!-- ======= CARROUSSEL STEP ======= -->
<!-- Documentation carroussel Bootstrap https://mdbootstrap.com/docs/jquery/javascript/carousel/ -->
<div id="topsite"></div>
<section class="banner">
    <div class="banner__square">
        <div class="banner__text hidden">
            <p>Nos produits </br> sont</p>
            <strong>100%</strong></br>
            <strong>Franco-Italiens</strong>
        </div>
        <div class="banner__logo">
            <img src="<?= get_template_directory_uri() . "/public/images/logo-dinapoli.png"; ?>" alt="brand-nicolas-pencrech" class="brand-nicolas-pencrech">
        </div>
        <div class="banner__text hidden">
            <p>Our products </br> are</p>
            <strong>100%</strong></br>
            <strong>French & Italian</strong>
        </div>
    </div>
    <?php get_template_part('template-parts/content/carousel'); ?>
