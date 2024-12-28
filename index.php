<?php 
    $activePage = 'index';

    session_start();
    include ("php/login/functions.php");
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>GYM BETTER</title>
    <link rel="icon" href="media/icon.png">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/home.css">
    <link rel="stylesheet" type="text/css" href="style/navbar.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/animations.css">
    <link rel="stylesheet" type="text/css" href="style/button.css">
    <script src="scripts/darkmode.js"></script>
    <script>
        if (!localStorage.getItem('cookieNotificationShown')) {
            alert('Weboldalunk sütiket használ. Kérjük, engedélyezze a sütik használatát a weboldalon.');
            localStorage.setItem('cookieNotificationShown', 'true');
        }
    </script>
    <?php 
        if (!isset($_SESSION['user'])) {
        echo '<script>localStorage.setItem("darkmode", false);</script>';
    }
    ?>
</head>
<body>
<?php include('nav.php') ?>
<section class="section-odd">
    <div class="toggle-container">
        <input type="checkbox" id="toggle" class="toggle" name="toggle">
        <label for="toggle" id="toggle-btn"
        <?php 
        if (isset($_SESSION['user'])) {
            echo 'onclick="darkMode()" class="toggle-btn" title="világos / sötétmód"';
        }
        else {
            echo 'onclick="unChecker()" class="toggle-btn locked" title="A sötétmód használatához jelentkezz be."';
        } ?> 
        ></label>
        <script>
            var toggle = document.getElementById('toggle');
            if (localStorage.getItem('darkmode') === 'true') {
                toggle.checked = true;
            } else {
                toggle.checked = false;
            }
        </script>
    </div>
    <div class="double-container">
        <div>
            <h1>GYM better BE better</h1>
            <p class="quote animation-show-slow">"A siker létráját nem lehet zsebre tett kézzel megmászni."</p>
        </div>
        <div>
            <img class="landingpicture animation-right" src="media/landingpicture.png" alt="Landing Picture">
        </div>
    </div>
    <hr>
    <div class="container">
        <h1>Miért jött létre a weboldal?</h1>
        <p>Ezt a weboldalt a kezdő vagy tudásukat tágítani kívánó, konditermes edzés iránt érdeklődőknek hoztuk létre, hogy segíthessünk nekik céljaik elérésében, bevezessük őket a testépítés művészetébe, elindítsuk őket egy egészségesebb élet felé. Célunk eddigi tapasztalataink és kutatásokra alapozott tudásunk megosztása, hogy megkíméljünk titeket a haszontalan edzéstervektől, nem működő, koplalásra alapozott diétáktól. Szeretnénk olyan edzéstervet és étrendet összeállítani nektek, amely személyre szabva, testi adottságaitoktól és céljaitoktól függően állítunk össze nektek. Erre a kérdőívünk kitöltésével tudtok jelentkezni, amellyel a nyerteseknek teljesen ingyenes összeállítjuk az edzéstervét és teljes étrendjét. Emellett minden tudást eljuttatunk hozzá, amely szükséges ahhoz, hogy helyesen és hatékonyan tudjon edzeni és életmódot váltani. Az oldalon ezen kívül ízelítőt adunk az egészséges táplálkozás titkairól, írunk a legfontosabb táplálékkiegészítőkről és hasznukról, valamint betekintést engedünk nektek az edzéstervünkbe is néhány hasznos tippel. Ha pedig motivációra vágysz, ebből sem lesz hiány, amelyet a motiváció fülre kattintva érhetsz el.</p>
    </div>
</section>

<section class="section-even">
    <h1 class="question">Mi kell a megfelelő edzéshez?</h1>
    <div class="triple-container animation-pop-up">
        <div class="left">
            <div class="image-wrapper">
                <a href="gyakorlatok.php"><img src="media/gyakorlat.png" alt="gyakorlat" class="image"></a>
            </div>
            <div class="image-title">
                <h2>Helyes gyakorlatok</h2>
            </div>
        </div>
        <div class="middle">
            <div class="image-wrapper">
                <a href="etrend.php"><img src="media/etrend.png" alt="etrend" class="image"></a>
            </div>
            <div class="image-title">
                <h2>Megfelelő étrend</h2>
            </div>
        </div>
        <div class="right">
            <div class="image-wrapper">
                <a href="motivacio.php"><img src="media/motivacio.png" alt="motivacio" class="image"></a>
            </div>
            <div class="image-title">
                <h2>Sok motiváció</h2>
            </div>
        </div>
    </div>
</section>

<section class="section-odd benefits">
    <div class="double-container">
        <div>
            <img class="benefitspicture animation-left" src="media/benefits.png" alt="Benefits Picture">
        </div>
        <div>
            <div class="title">
                <h1>ELŐNYÖK</h1>
            </div>
            <div>
                <h3><img class="icon" src="media/icon1.png" alt="ikon"> Harmonikus mindennapok</h3>
                <h3><img class="icon" src="media/icon2.png" alt="ikon"> Egészségesebb életmód</h3>
                <h3><img class="icon" src="media/icon3.png" alt="ikon"> Hasznos élettapasztalatok</h3>
                <h3><img class="icon" src="media/icon4.png" alt="ikon"> Lelki és pszichés állapot javulás</h3>
                <h3><img class="icon" src="media/icon5.png" alt="ikon"> Napról napra a legjobb éned leszel</h3>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>
</body>
</html>