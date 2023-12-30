<!doctype html>
<html lang="en">

<head>
    <?php
    require_once "blocks/head.html";
    ?>
</head>

<body>
    <?php require_once "blocks/header.html" ?>
    <div class="header">
        <div class="overlay">
            <div class="description">
                <h3>
                    <h1>Welcome to the officail website of Fly Away</h1>
                    <p>Fly Away is a travel agency founded in 2023. Even in such a short time, thanks to the work of our
                        company, more than 143,000 people have already enjoyed their unforgettable trips. Do not stay
                        away and join the ranks of our happy clients,
                        embarking on an exciting journey through our magnificent planet!</p>
                    <button class="btn btn-outline-secondary" onclick="window.location.href='#about';">See more</button>
                </h3>
            </div>
        </div>
    </div>

    <div class="about">
        <a name="about"></a>
        <img src="images/abt.jpg" class="about_img">
        <div class="abt">
            <h3>About Us</h3>
            <p>Our company gives you a chance to get a tour to almost any place on the Earth. If you were wondering how
                to spend your holidays pleasant and interesting - try one of our tours! You won't become dissapointed
                nor broke, it's our promise)</p>
            <p>The office of Fly Away takes place in the center of Moscow, so you can easily reach it. We offer you a
                wide variety of trips for any budget and wish. Buying our tour you get a guarantee that your trip will
                be 100% safe, unforgettable and you
                definitely won't regret it.</p>

        </div>
    </div>
    <a name="features"></a><!--Якорь для навигации в хэдере-->
    <div class="features">
        <h1>Our features:</h1>
        <div class="feat">
            <div class="f">
                <img src="images/f1.png" class="f_img">
                <h4>Wide range of tours</h4>
                <p>We offer tours to almost every corner of the world. Do you dream of visiting the beaches of Sri Lanka
                    or the hot Dominican Republic? No problem!</p>
            </div>
            <div class="f">
                <img src="images/f2.png" class="f_img">
                <h4>Quality service</h4>
                <p>We work only with reliable partners to offer and organize the best tours with a guarantee for our
                    beloved customers.</p>
            </div>
            <div class="f">
                <img src="images/f3.png" class="f_img">
                <h4>Nice prices</h4>
                <p>The best offers and prices on the site. You can choose a tour according to your wishes, or you can
                    purchase a last-minute ticket at a very competitive price.</p>
            </div>
            <div class="f">
                <img src="images/f4.png" class="f_img">
                <h4>Support 24/7</h4>
                <p>We take care of our clients 24/7. If you have any questions or difficulties while traveling, we are
                    always there. Every client is important for us!</p>
            </div>
        </div>
    </div>

    <div class="portfolio">
        <h1 class="text-center">Portfolio</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="images/portfolio/1.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="images/portfolio/2.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="images/portfolio/3.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="images/portfolio/4.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="images/portfolio/5.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="images/portfolio/6.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="images/portfolio/7.jpeg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="images/portfolio/8.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="images/portfolio/9.jpg" class="img-fluid">
                </div>
            </div>
        </div>
        <a name="tours"></a>
    </div>

    <div class="tours">
        <h1 class="text-center">Last minute tours</h1>
        <div class="description">Unique routes, great photos and extreme tours, crafted with a pure love of adventure
            and nature</div>
        <div class="tour">
            <div class="t">
                <img src="images/tours/italy.jpg" class="img">
                <h4>Unforgettable tour to Italy</h4>
                <p class="info">from $1,125<br>for 1 person, 7 days</p>
                <img src="images/tours/5star.svg" class="stars">
            </div>
            <div class="t">
                <img src="images/tours/france.jpg" class="img">
                <h4>Honeymoon in a romantic France</h4>
                <p class="info">from $2,375<br>for a couple, 7 days<br></p>
                <img src="images/tours/5star.svg" class="stars">
            </div>
            <div class="t">
                <img src="images/tours/netherlands.jpg" class="img">
                <h4>Adventure in the Netherlands</h4>
                <p class="info">from $2,200<br>for 1 person, 5 days</p>
                <img src="images/tours/5star.svg" class="stars">
            </div>
            <div class="t">
                <img src="images/tours/thailand.jpg" class="img">
                <h4>Holidays on the island of Phuket</h4>
                <p class="info">from $1,500<br>for a couple, 14 days</p>
                <img src="images/tours/5star.svg" class="stars">
            </div>
        </div>
        <div class="modal">
            <div class="modal_content">
                <button class="close_modal"><img src="images/close.png"></button> Create your trip:
            </div>
        </div>
        <form action="/personalTour.php">
        <button class="btn btn-outline-secondary">Personal tour</button>
        </form>
    </div>
    <?php require_once "blocks/footer.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src='js/main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>