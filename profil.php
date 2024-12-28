<?php 
    $activePage = 'profil';
    session_start();

    include ("php/login/functions.php");

    if (!isset($_SESSION['user'])) {
        header("Location: bejelentkezes.php");
    }

    $users = loadUsers("php/login/users.txt");
    $datas = loadUsers("php/login/datas.txt");

    $errors = [];
    $success = FALSE;
    $successD = FALSE;

    if (isset($_POST['save'])) { 

        $user_name = $_SESSION['user']['user_name'];
        $password = $_POST['password'];
        $path = "";
        $format = "";


        if (isset($_POST['new_password']) && trim($_POST['new_password'] !== "")) {
            if (!preg_match("/^[a-zA-Z0-9_áéíóöőúüű]+$/", $_POST["new_password"])) {
                $errors[] = "A jelszó csak a magyar ábécé betűit, számokat és alulvonást tartalmazhat!";
            }
            if ($_POST["new_password"] !== $_POST["new_password2"]) {
                $errors[] = "A jelszó és az ellenőrző jelszó nem egyezik!";
            }
            if (strlen($_POST["new_password"]) < 4) {
                $errors[] = "A jelszónak legalább 4 karakter hosszúnak kell lennie!";
            }
            if (count($errors) === 0) {
                $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
            }
        }

        if (isset($_FILES['picture']) && $_FILES['picture']['size'] >= 10485760) {
            $errors[] = "A kép mérete túl nagy!";
        } else if (isset($_FILES['picture']) && trim($_FILES['picture']['name']) != "") {
            $format = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
            $picture_name = $_SESSION['user']['user_name'];
            $path = "php/login/images/" . $picture_name;
            move_uploaded_file($_FILES["picture"]['tmp_name'], $path . "." . $format);
        }

        foreach ($users as $index => $user) {
            if ($user['user_name'] === $user_name && password_verify($password, $user['password']) && count($errors) === 0) {
                $success = TRUE;
                $users[$index]['last_name'] = $_POST['last_name'];
                $users[$index]['first_name'] = $_POST['first_name'];
                $users[$index]['email'] = $_POST['email'];
                if (isset($new_password)) {
                    $users[$index]['password'] = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
                }
                $_SESSION['user'] = ["user_name" => $user["user_name"], "email" => $users[$index]['email'], "first_name" => $users[$index]['first_name'], "last_name" => $users[$index]['last_name'], "password" => $users[$index]['password']];
                foreach ($datas as $index => $data) {
                    if ($data['user_name'] == $user_name) {
                        $datas[$index]['year'] = $_POST['year'];
                        $datas[$index]['goal'] = $_POST['goal'];
                        $datas[$index]['height'] = $_POST['height'];
                        $datas[$index]['weight'] = $_POST['weight'];
                        $datas[$index]['gender'] = $_POST['gender'];
                        if (trim($path) !== "") {
                            $datas[$index]['picture'] = $path;
                            $datas[$index]['format'] = $format;
                        }
                        $_SESSION['data'] = ["user_name" => $user_name, "year" => $datas[$index]['year'], "goal" => $datas[$index]['goal'], "height" => $datas[$index]['height'], "weight" => $datas[$index]['weight'], "gender" => $datas[$index]['gender'], "picture" => $datas[$index]['picture'], "format" => $datas[$index]['format']];
                        if (isset($_POST['delete']) && trim($_SESSION['data']['picture'] !== "")) {
                            unlink($datas[$index]['picture'] . '.' . $datas[$index]['format']);
                            $_SESSION['data']['picture'] = "";
                            $datas[$index]['picture'] = "";
                        }
                    }
                }
                $_POST = array();
                break;
            } else if ($user['user_name'] === $user_name && !password_verify($password, $user['password'])) {
                $errors[] = "Hibás jelszó";
                break;
            }
        }
        if ($success) {
            saveUsers("php/login/users.txt", $users);
            saveUsers("php/login/datas.txt", $datas);   
        }
    }
    if (isset($_POST['deleteprofile'])) {
        $user_name = $_SESSION['user']['user_name'];
        $password = $_POST['password'];
        foreach ($users as $index => $user) {
        if ($user['user_name'] === $user_name && password_verify($password, $user['password']) && count($errors) === 0) {
            $successD = TRUE;
            }  else if ($user['user_name'] === $user_name && !password_verify($password, $user['password'])) {
                $errors[] = "Hibás jelszó";
                break;
            }   
        }
    }



?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>GYM BETTER</title>
    <link rel="icon" href="media/icon.png">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/login.css">
    <link rel="stylesheet" type="text/css" href="style/profile.css">
    <link rel="stylesheet" type="text/css" href="style/navbar.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/animations.css">
    <link rel="stylesheet" type="text/css" href="style/button.css">
    <script src="scripts/darkmode.js"></script>
</head>
<body>
<?php include 'nav.php' ?>
<section class="section-odd">
    <div class="tall-container">
        <div class="container">
            <?php 
                if (count($errors) > 0) {
                    for ($i = 0; $i < count($errors); $i++) { 
                         echo '<p class="error animation-pop-up">' . $errors[$i] . '</p>';
                     }
                }
            ?>
            <?php 
                if ($success) {
                    echo '<p class="success animation-pop-up">Sikeres adatmódosítás</p>';
                    echo '<meta http-equiv="refresh" content="1.5;url=profil.php">';
                } 
                if ($successD) {
                    echo '<p class="success animation-pop-up">Profil törlése folyamatban</p>';
                    echo '<meta http-equiv="refresh" content="1.5;url=php/login/deleteprofile.php">';
                }
            ?>
            <div class="profile-container">
                <div class="center-container">
                    <?php 
                    if (trim($_SESSION['data']['picture'] !== "")) {
                        echo '<div class="picture-container">';
                        echo '<div class="profile-picture"><img class="profile-picture" alt="profile-picture" src="' . $_SESSION['data']['picture'] . "." . $_SESSION['data']['format'] . '"></div>';
                        echo '</div>';
                    } else {
                        echo '<div class="picture-container">';
                        echo '<div class="profile-picture"><img alt="profile-picture" class="profile-picture" src="php/login/images/default.png"></div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="center-container">
                    <p>
                    <?php 
                        echo $_SESSION['user']['user_name'];
                    ?>
                    </p>
                </div>
                <div class="data-container">
                    <form class="data-form" action="profil.php" method="post" enctype="multipart/form-data">
                        <h1>Profil adatok:</h1>
                        <div class="double-container2">
                            <div class="form-group">
                                <label for="last_name">Vezetéknév</label>
                                <input class="half" type="text" id="last_name" name="last_name" <?php fill("user","last_name");?>>
                            </div>
                            <div class="form-group">
                                <label for="first_name">Keresztnév</label>
                                <input class="half" type="text" id="first_name" name="first_name" <?php fill("user","first_name");?>>
                            </div>
                        </div>
                        <div class="single-container2">
                            <div class="form-group">
                                <label for="email">Email cím</label>
                                <input class="full" type="email" id="email" name="email" <?php fill("user","email");?>>
                            </div>
                        </div>
                        <div class="single-container2">
                            <div class="form-group">
                                <label for="password">Jelszó*</label>
                                <input class="full" title="Az adatok szerkeztéséhez a jelszó megadása kötelező." type="password" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="double-container2">
                            <div class="form-group">
                                <label for="new_password">Új jelszó*</label>
                                <input class="half" title="Az új jelszó minimum 4 karakter hosszú, csak a magyar ábécé betűit, számokat és alulvonást tartalmazhat." type="password" id="new_password" name="new_password">
                            </div>
                            <div class="form-group">
                                <label for="new_password">Új jelszó ismét*</label>
                                <input class="half" title="Az új jelszónak és az ellenőrző jelszónak meg kell egyeznie." type="password" id="new_password2" name="new_password2">
                            </div>
                        </div>
                        <h1>Személyes adatok:</h1>
                        <div class="double-container2">
                            <div class="form-group">
                                <label for="year">Születési év</label>
                                <input class="half" type="number" id="year" name="year" min="1924" max="2009" title="minimum életkor: 14 év (2009)" <?php fill("data","year");?>>
                            </div>
                            <div class="form-group">
                                <label for="goal">Cél</label>
                                <select class="half selecter" id="goal" name="goal">
                                    <option value="" <?php fillSelector("data","goal","");?>>-</option>
                                    <option value="gain" <?php fillSelector("data","goal","gain");?>>Izomtömeg növelése</option>
                                    <option value="weightloss" <?php fillSelector("data","goal","weightloss");?>>Gyors fogyás</option>
                                    <option value="both" <?php fillSelector("data","goal","both");?>>Mindkettő</option>
                                </select>
                            </div>
                        </div>
                        <div class="double-container2">
                            <div class="form-group">
                                <label for="height">Magasság (cm)</label>
                                <input class="half" type="number" id="height" name="height" min="120" max="230" title="minimum 120 cm, maximum 230 cm" <?php fill("data","height");?>>
                            </div>
                            <div class="form-group">
                                <label for="weight">Súly (kg)</label>
                                <input class="half" type="number" id="weight" name="weight" min="35" max="250" title="minimum 35 kg, maximum 250 kg" <?php fill("data","weight");?>>
                            </div>
                        </div>
                        <div class="single-container2">
                            <div class="form-group">
                                <label for="gender">Nem</label>
                                <select class="selecter" id="gender" name="gender">
                                    <option value="" <?php fillSelector("data","gender","");?>>-</option>
                                    <option value="male" <?php fillSelector("data","gender","male");?>>Férfi</option>
                                    <option value="female" <?php fillSelector("data","gender","female");?>>Nő</option>
                                    <option value="other" <?php fillSelector("data","gender","other");?>>Egyéb</option>
                                    <option value="fridge" <?php fillSelector("data","gender","fridge");?>>SAMSUNG RS6HA8891SL/EF HŰTŐSZEK RÉNY</option>
                                </select>
                            </div>
                        </div>
                        <div class="single-container2">
                            <div class="form-group">
                                <label for="picture">Kép</label>
                                <div class="input-container">
                                    <input class="full" type="file" id="picture" name="picture" title="maximum 10 mb, engedélyezett formátumok: png, jpg, jpeg, jfif, pjpeg, pjp" accept="image/jpeg, image/png">
                                    <input class="delete" id="deleted-check" type="checkbox" name="delete">
                                    <label for="deleted-check" title="Profilkép törlése" ></label>
                                </div>
                            </div>
                            <div class="single-container2">
                                <p class="undertitle">Az adatok szerkeztéséhez, profil törléséhez a jelszó megadása kötelező, a kitöltési feltételeket a kurzor mezőkre mutatásával jeleníthetjük meg.</p>
                                <br>
                            </div>
                        </div>
                        <div class="container2">
                            <button type="submit" name="save">Mentés</button>
                            <button type="submit" name="deleteprofile">Profil törlése</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>
</body>
</html>