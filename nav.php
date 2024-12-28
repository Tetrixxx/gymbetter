<nav>
    <img src="media/logo.png" alt="Logo">
    <ul>
        <li <?php if($activePage == 'index') echo 'class="selected"'; ?>><a href="index.php">Kezdőlap</a></li>
        <li <?php if($activePage == 'gyakorlatok') echo 'class="selected"'; ?>><a href="gyakorlatok.php">Gyakorlatok</a></li>
        <li <?php if($activePage == 'etrend') echo 'class="selected"'; ?>><a href="etrend.php">Étrend</a></li>
        <li <?php if($activePage == 'motivacio') echo 'class="selected"'; ?>><a href="motivacio.php">Motiváció</a></li>
        <li <?php if($activePage == 'urlap') echo 'class="selected"'; ?>><a href="urlap.php">Űrlap</a></li>
        <?php if(isset($_SESSION['user'])) { ?>
            <li class="profile<?php if($activePage == 'profil') echo ' selected'; ?>"><a href="profil.php"><?php echo $_SESSION['user']['user_name'] ?></a></li>
            <li class="login<?php if($activePage == 'bejelentkezes') echo ' selected'; ?>"><a href="php/login/logout.php">Kijelentkezés</a></li>
        <?php } else { ?>
            <li class="regist<?php if($activePage == 'regisztracio') echo ' selected'; ?>"><a href="regisztracio.php">Regisztráció</a></li>
            <li class="login<?php if($activePage == 'bejelentkezes') echo ' selected'; ?>"><a href="bejelentkezes.php">Bejelentkezés</a></li>
        <?php } ?>
    </ul>
</nav>
