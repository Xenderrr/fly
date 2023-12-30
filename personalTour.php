<?php

require_once __DIR__ . '/php/boot.php';
?>
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
                    <h1>Here you can create your own trip</h1>
                    <p>Our agency "FlyAway" provides our clients with the opportunity to visit a large number of
                        countries.
                        On this page you can get acquainted with the various features of each state, and then make a
                        choice
                        and arrange a tour.</p>
                    <button class="btn btn-outline-secondary" onclick="window.location.href='#tour';">See more</button>
                </h3>
            </div>
        </div>
    </div>
    <a name="tour"></a>
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-6">
                <?php flash() ?>
                <h1 class="mb-5">Create your personal trip:</h1>
                <form method="post" action="\php\make_tour.php" autocomplete="on">
                    <div class="mb-3">
                        <label for="depature_date" class="form-label">Departure date</label>
                        <input class="form-control" type="date" name="dep_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="arrival_date" class="form-label">Arrival date</label>
                        <input class="form-control" type="date" name="arr_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input class="form-control" name="country" placeholder="Enter the contry you want to visit"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input class="form-control" name="city" placeholder="Enter the city you want to visit" required>
                    </div>
                    <button class="btn btn-primary" id="submit" type="submit">Save the data</button>
                </form>
            </div>
        </div>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>

</html>