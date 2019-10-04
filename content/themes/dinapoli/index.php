<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Caveat:400,700|Satisfy&display=swap" rel="stylesheet">
    <title>Pzza Di Napoli</title>
</head>

<body>
    <div class="wrapper">

        <header class="header fixed">
            <a href="index.html" class="header__home">Accueil</a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
              <li><a href="index.html">A propos</a></li>
              <li><a href="products.html">Nos produits</a></li>
              <li><a href="pizza.html">Nos pizzas</a></li>
              <li><a href="hours.html">Horaires</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </header>

        <!-- ======= CARROUSSEL STEP ======= -->
        <!-- Documentation carroussel Bootstrap https://mdbootstrap.com/docs/jquery/javascript/carousel/ -->
        <div class="banner">
            <div class="banner__square">
                <div class="banner__text hidden">
                    <p>Nos produits </br> sont</p>
                    <strong>100%</strong></br>
                    <strong>Franco-Italiens</strong>
                </div>
                <div class="banner__logo">
                    <img src="../images/logo-dinapoli.png" alt="brand-nicolas-pencrech" class="brand-nicolas-pencrech">
                </div>
                <div class="banner__text hidden">
                    <p>Our products </br> are</p>
                    <strong>100%</strong></br>
                    <strong>French & Italian</strong>
                </div>
            </div>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../images/pizza.png"
                      alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../images/pizza2.jpg"
                      alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../images/pizza3.jpg"
                      alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <!-- ======= MAIN CONTAIN STEP ======= -->
        <main class="container-article">
            <section class="article">
                <div class="article__image">
                    <img src="../images/nicolas-pencrech.jpg" alt="image-1">
                </div>
                <div class="article__text">
                    <p>Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas
                    latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens
                    et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.</p>

                    <p>Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti
                    suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita.
                    Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis;
                    hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore
                    vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.</p>

                </div>
            </section>

            <section class="article">
                <div class="article__image">
                    <img src="../images/petrir.jpg" alt="image-1">
                </div>
                <div class="article__text">
                    <p>Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas
                    latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens
                    et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.</p>

                    <p>Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti
                    suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita.
                    Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis;
                    hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore
                    vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.</p>
                </div>
            </section>

            <section class="article">
                <div class="article__image">
                    <img src="../images/pizza.png" alt="image-1">
                </div>
                <div class="article__text">
                    <p>Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas
                    latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens
                    et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.</p>

                    <p>Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti
                    suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita.
                    Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis;
                    hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore
                    vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.</p>
                </div>
            </section>
        </main>

        <footer id="footer" class="footer">
            <!-- Footer Elements -->
            <div class="footer__logo">
                <img src="../images/logo-dinapoli.png" alt="brand-nicolas-pencrec'h">
            </div>
            <div class="footer__social-nav">
                <!-- Facebook -->
                <a href="#Facebook" class="footer__social">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <!-- Twitter -->
                <a href="#Twitter" class="footer__social">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <!-- Instagram-->
                <a href="#Instagram" class="footer__social">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <!--Location -->
                <a href="#Location" class="footer__social">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </a>
                <!--Tripadvisor-->
                <a href="#Tripadvisor" class="footer__social">
                    <i class="fa fa-tripadvisor" aria-hidden="true"></i>
                </a>
            </div>
             <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="https://www.pizza-di-napoli.fr/">Pizza Di Napoli</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <script src="js/app.js"></script>
</body>
</html>