<?php
$user = getLogin();
?>
<div class="header">
    <div class="overlay">
        <div class="description">
            <h1>Welcome back,
                <?= htmlspecialchars($user['username']) ?>!
            </h1>
            <p>Here you can see you personal data and information about your tour plans.</p>
            <button class="btn btn-outline-secondary" onclick="window.location.href='#pd';">See my data</button>
            <br>
            <form class="mt-5" method="post" action="\php\do_logout.php">
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
    </div>
</div>
<div class=personal_data>
    <!--Тут нужно вставить всю личную информацию пользователя-->
    <a name="pd"></a>
    Login:
    <?= htmlspecialchars($user['username']) ?>
    <br>
    <?php
    $NSP = getNSP();
    if ($NSP) {
        ?>
        Name:
        <?= htmlspecialchars($NSP['name']) ?>
        <br>
        Surname:
        <?= htmlspecialchars($NSP['surname']) ?>
        <br>
        Patronymic:
        <?= htmlspecialchars($NSP['patronymic']) ?>
        <br>
        Birthday:
        <?= htmlspecialchars($NSP['birthday']) ?>
        <br>
        Phone number:
        <?= htmlspecialchars($NSP['phone']) ?>
        <br>
        <?php
        $Docs = getDocs();
        if ($Docs) {
            ?>
            Passport id:
            <?= htmlspecialchars($Docs['passport_id']) ?>
            <br>
            Passport series:
            <?= htmlspecialchars($Docs['passport_series']) ?>
            <br>
            Visa:
            <?php
            if ($Docs['visa'] == 1) {
                echo 'Avaliable';
            } else {
                echo 'Not avaliable';
            }
        } else {
            ?>
            <form method="post" action="\php\save_docs.php">
                <div class="col-lg-9">
                    <h2 class="mb-5"><br>You haven't filled your document data yet.<br>Do it now!</h2>

                    <?php flash(); ?>

                    <div class="mb-3">
                        <label for="passport_id" class="form-label">Passport ID</label>
                        <input name="passport_id" id="passport_id" pattern="[0-9]{6}"
                            placeholder="This field must contain 6 digits" maxlength="6" type="text" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="passport_series" class="form-label">Passport series</label>
                        <input name="passport_series" id="passport_series" pattern="[0-9]{4}"
                            placeholder="This field must contain 4 digits" maxlength="4" type="text" class="form-control"
                            required>
                    </div>
                    <div class="mb-3" ">
                                                    <label for=" visa" class="form-label">Do you have visa?</label>
                        <div style="display: flex; flex-direction: row; width: 40%; justify-content: space-around">
                            <p>Yes</p>
                            <input type="radio" class="radio_button" name="visa" value="1" required>
                            <p>No</p>
                            <input type="radio" class="radio_button" name="visa" value="0" required>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Add the data</button>
                    </div>
                </div>
            </form>
            <?php
        }
        $user = getPD();
        if ($user) {
            ?>
            <br>
            <br>
            <hr>
            <h3>Your first tour:</h3>
            <?php
            echo "<table class='table'><tr><th>Tour id</th><th>Country</th><th>City</th><th>Start</th><th>End</th></tr>";
            echo "<tr>";
            echo "<td>" . $user["id_tour"] . "</td>";
            echo "<td>" . $user["country"] . "</td>";
            echo "<td>" . $user["city"] . "</td>";
            echo "<td>" . $user["start"] . "</td>";
            echo "<td>" . $user["end"] . "</td>";
            echo "</tr>";
            echo "</table>";
        } else {
            ?>
            <br>
            <h2>You have no planned tours for now</h2>
            <br>
            <button class="btn btn-outline-secondary" onclick="window.location.href='\personalTour.php';">Create your first
                personal tour</button>
            <?php
        }
    } else {
        ?>
        <form method="post" action="\php\save_pd.php">
            <div class="col-lg-9">
                <h2 class="mb-5">You haven't filled your personal data yet.<br>Do it now!</h2>

                <?php flash(); ?>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" required>
                </div>
                <div class="mb-3">
                    <label for="patronymic" class="form-label">Patronymic</label>
                    <input type="text" class="form-control" id="patronymic" name="patronymic" required>
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone number</label>
                    <input class="form-control" id="phone" name="phone"
                        pattern="\8\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" maxlength="11"
                        required>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Add the data</button>
                </div>
            </div>
        </form>
        <?php
    }
    ?>
</div>