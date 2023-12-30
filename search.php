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
                    <h1>Here you can read an information<br>about different countries</h1>
                    <p>Our agency "FlyAway" provides our clients with the opportunity to visit a large number of
                        countries.
                        On this page you can get acquainted with the various features of each state, and then make a
                        choice
                        and arrange a tour.</p>
                    <button class="btn btn-outline-secondary" onclick="window.location.href='#about';">See more</button>
                </h3>
            </div>
        </div>
    </div>
    <div class="country">

        <form method="post" action="search.php" id="searchform">
            <div class="mb-3">
                <label for="search_country" class="form-label">Enter the name of the country you want to know
                    about:</label>
                <input type="text" class="form-control" id="country" name="search_country">
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <?php
        $conn = new mysqli("localhost", "root", "", "tour");
        if ($conn->connect_error) {
            die("Error: " . $conn->connect_error);
        }
        $country = $_POST["search_country"];
        $sql = "SELECT * FROM country WHERE country_name = '$country'";
        if ($result = $conn->query($sql)) {
            $rowsCount = $result->num_rows; // количество полученных строк
            echo "<p>Quantity of found countries: $rowsCount</p>";
            echo "<table class='table'><tr><th>Country name</th><th>Language</th><th>Currency</th><th>Brief description</th></tr>";//deleted: <th>Id</th>
            foreach ($result as $row) {
                echo "<tr>";
                //echo "<td>" . $row["country_id"] . "</td>";
                echo "<td>" . $row["country_name"] . "</td>";
                echo "<td>" . $row["language"] . "</td>";
                echo "<td>" . $row["currency"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->free();
        } else {
            echo "Ошибка: " . $conn->error;
        }
        $conn->close();
        ?>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>

</html>
<?php

require_once __DIR__.'/boot.php';

// Поиск по названию страны
/*function searchCountry($country) {
    global $pdo;
    
    
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
?>*/