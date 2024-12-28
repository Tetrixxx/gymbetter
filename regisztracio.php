<?php 
    $activePage = 'regisztracio';

    session_start();
    include ("php/login/functions.php");

    $users = loadUsers("php/login/users.txt");
    $datas = loadUsers("php/login/datas.txt");

    $errors = [];
    $success = FALSE;

    if (isset($_POST["regist"])) { 
        if (!isset($_POST["user_name"]) || empty($_POST["user_name"])) {
            $errors[] = "A felhasználónév megadása kötelező!";
            if (strpos($_POST["user_name"], " ") !== false) {
                    $errors[] = "A felhasználónév nem tartalmazhat szóközt!";
            }
        } else {
            $user_name = $_POST["user_name"];
        } 

        

        if (!isset($_POST["password"]) || empty($_POST["password"]) || !isset($_POST["password_again"]) || empty($_POST["password_again"])) {
            $errors[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";
        }

        
        if (!preg_match("/^[a-zA-Z0-9_áéíóöőúüű]+$/", $_POST["password"])) {
            $errors[] = "A jelszó csak a magyar ábécé betűit, számokat és alulvonást tartalmazhat!";
        }

        
        $password = $_POST["password"];
        $password_again = $_POST["password_again"];
        $email = NULL;
        $first_name = NULL;
        $last_name = NULL;

        if (isset($_POST["email"])) {
            $email = $_POST["email"];
        }
        if (isset($_POST["first_name"])) {
            $first_name = $_POST["first_name"];
        }
        if (isset($_POST["last_name"])) {
            $last_name = $_POST["last_name"];
        }
        

        foreach ($users as $user) {
            if ($user["user_name"] === $user_name) {
                unset($user_name);
                $errors[] = "A felhasználónév már foglalt!";
                break;
            }
        }

        if (strlen($password) < 4)
            $errors[] = "A jelszónak legalább 4 karakter hosszúnak kell lennie!";

        if ($password !== $password_again)
            $errors[] = "A jelszó és az ellenőrző jelszó nem egyezik!";

        if (count($errors) === 0) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $users[] = ["user_name" => $user_name, "password" => $password, "email" => $email, "first_name" => $first_name, "last_name" => $last_name];
            $datas[] = ["user_name" => $user_name, "year" => "", "goal" => "", "height" => "", "weight" => "", "gender" => "", "picture" => "", "format" => ""];
            saveUsers("php/login/users.txt", $users);
            saveUsers("php/login/datas.txt", $datas);
            $success = TRUE;
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
                echo '<p class="success animation-pop-up">Sikeres regisztráció</p>';
                echo '<meta http-equiv="refresh" content="1.5;url=bejelentkezes.php">';
            }
        ?>
        <div class="form-container">
            <h1>Regisztráció</h1>
            <form class="regist-form" action="regisztracio.php" method="post">
                <div class="form-group">
                    <label for="user_name">Felhasználónév*</label>
                    <input title="A felhasználónév nem tartalmazhat szóközt." type="text" id="user_name" name="user_name" value="<?php echo isset($user_name) ? $_POST['user_name'] : ''; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email cím</label>
                    <input type="email" id="email" name="email" value="<?php echo isset($email) ? $_POST['email'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="last_name">Vezetéknév</label>
                    <input type="text" id="last_name" name="last_name" value="<?php echo isset($last_name) ? $_POST['last_name'] : ''; ?>">
                    <label for="first_name">Keresztnév</label>
                    <input type="text" id="first_name" name="first_name" value="<?php echo isset($first_name) ? $_POST['first_name'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Jelszó*</label>
                    <input title="A jelszó minimum 4 karakter hosszú, csak a magyar ábécé betűit, számokat és alulvonást tartalmazhat." type="password" id="password" name="password" required>
                    <label for="password_again">Jelszó ismét*</label>
                    <input title="A jelszónak és az ellenőrző jelszónak meg kell egyeznie." type="password" id="password_again" name="password_again" required>
                    <p class="undertitle">*A megjelölt mezők kitöltése kötelező, a kitöltési feltételeket a kurzor rámutatásával jeleníthetjük meg.</p>
                </div>
                <div class="container2">
                    <button type="submit" name="regist">Regisztráció</button>
                    <a href="bejelentkezes.php">Bejelentkezés</a>
                </div>
            </form>
        </div>
    </div>
</section>
<?php include('footer.php') ?>
</body>
</html>