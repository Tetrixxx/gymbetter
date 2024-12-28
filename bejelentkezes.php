<?php 
    $activePage = 'bejelentkezes';
    session_start();

    include ("php/login/functions.php");

    $users = loadUsers("php/login/users.txt");
    $datas = loadUsers("php/login/datas.txt");

    $errors = [];
    $success = FALSE;

    if (isset($_POST['login'])) {
        if (!isset($_POST['user_name']) || empty($_POST['user_name']) || !isset($_POST['password']) || empty($_POST['password']) || strpos($_POST["user_name"], " ") !== false) {
            $errors[] = "Hiányzó adatok!";
        } else {

            $user_name = $_POST['user_name'];
            $password = $_POST['password'];

            foreach ($users as $user) {
                if ($user["user_name"] === $user_name && password_verify($password, $user["password"])) {
                    $success = TRUE;
                    $_SESSION['user'] = ["user_name" => $user["user_name"], "email" => $user["email"], "first_name" => $user["first_name"], "last_name" => $user["last_name"], "password" => $user["password"]];
                    foreach ($datas as $data) {
                        if ($data['user_name'] === $user_name) {
                            $_SESSION['data'] = ["user_name" => $data['user_name'], "year" => $data['year'], "goal" => $data['goal'], "height" => $data['height'], "weight" => $data['weight'], "gender" => $data['gender'], "picture" => $data['picture'], "format" => $data['format']];
                        }
                    }
                    break;
                } else if ($user["user_name"] === $user_name && !password_verify($password, $user["password"])) {
                    $errors[] = "A felhasználónév vagy jelszó téves!";
                    break;
                }
            }

            if (!$success && count($errors) !== 1) {
                $errors[] = "Ezzel a felhasználónévvel nem létezik fiók!";
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
    <link rel="stylesheet" type="text/css" href="style/navbar.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/animations.css">
    <script src="scripts/darkmode.js"></script>
</head>
<body>
<?php include 'nav.php' ?>
<section class="section-odd">
    <div class="tall-container">
        <?php 
            if (count($errors) > 0) {
                for ($i = 0; $i < count($errors); $i++) { 
                     echo '<p class="error animation-pop-up">' . $errors[$i] . '</p>';
                 }
            }
        ?>
        <?php 
            if ($success) {
                echo '<p class="success animation-pop-up">Sikeres belépés</p>';
                echo '<meta http-equiv="refresh" content="1.5;url=index.php">';
            }
        ?>
        <div class="form-container">
            <h1>Bejelentkezés</h1>
            <form class="login-form" action="bejelentkezes.php" method="post">
                <div class="form-group">
                    <label for="user_name">Felhasználónév</label>
                    <input type="text" id="user_name" name="user_name" required>
                </div>
                <div class="form-group">
                    <label for="password">Jelszó</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="container2">
                    <button type="submit" name="login">Bejelentkezés</button>
                    <a href="regisztracio.php">Regisztráció</a>
                </div>
            </form>
        </div>
    </div>
</section>
<?php include('footer.php') ?>
</body>
</html>