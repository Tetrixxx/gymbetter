<?php 
    $activePage = 'gyakorlatok';

    session_start();
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
    <link rel="stylesheet" type="text/css" href="style/exercise.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/animations.css">
    <script src="scripts/darkmode.js"></script>
</head>
<body>
<?php include('nav.php') ?>
<section class="section-odd">
    <div class="double-container">
        <div>
            <h1> Minden a forma </h1>
            <p class="training"> A megfelelően megtervezett és kivitelezett edzésterv kihagyhatatlan a siker és céljaink eléréséhez. Természetesen le lehet menni úgy is az edzőterembe, hogy éppen azt csinálunk, amihez kedvünk van, de a fejlődésünk jelentősen kevesebb lesz, amelyet rövid időn belül tapasztalhatunk. A fejlődéshez nélkülözhetetlen a megfelelő súlyok használata, a teljes mozgástartomány kihasználása, izolált gyakorlatok (1 gyakorlat közben 1 izomcsoportot használjunk) és helyes forma tartása. Mi a push (nyomó), pull (húzó), leg (láb) felosztást ajánljuk. Ezekből alább mutatunk be néhány gyakorlatot.</p>
        </div>
        <div>
            <img class="expicture animation-right" src="media/form.png" alt="Calisthenics Picture">
        </div>
    </div>
</section>

<section class="section-even">
    <div class="double-container">
        <h1>Tolni!</h1>
    </div>
    <div class="double-container">
        <div class="left-container">
            <h2>Fekvenyomás kézisúlyzóval </h2>
            <p class="description">Ezzel a gyakorlattal a melled és részben a tricepszed edzed. Figyelj, hogy a karod a testeddel nagyjából 45°-os szöget zárjon be, a súlyok pedig a karoddal párhuzamosan álljanak. </p>
            <hr>
        </div>
        <div class="right-container">
            <?php 
            if (isset($_SESSION["user"])){
             echo '<video muted autoplay loop class="vids animation-right" src="media/dumbellbp.mp4"></video>';
              }
             else {
               echo'<a href="bejelentkezes.php"><img class="gif animation-right" src="media/playbutton.png" alt="playbutton" title="Kérjük jelentkezzen be"></a>';

            }

            ?>
            
        </div>
    </div>


    <div class="double-container">
        <div class="left-container">
            <h2> Vállból nyomás kézisúlyzóval </h2>
            <p class="description"> A vállad elülső részét célozza meg. A karod és könyököd nagyjából párhuzamos legyen a vállaiddal. Engedd le majdnem a vállad vonaláig a súlyokat és onnan toldd fel teljesen a súlyokat. </p>
            <hr>
        </div>
        <div class="right-container">
          <?php 
            if (isset($_SESSION["user"])){
             echo '<video muted autoplay loop class="vids animation-right" src="media/overheadpress.mp4"></video>';
              }
             else {
                 echo'<a href="bejelentkezes.php"><img class="gif animation-right" src="media/playbutton.png" alt="playbutton" title="Kérjük jelentkezzen be"></a>';
            }

            ?>
        </div>
    </div>


    <div class="double-container">
        <div class="left-container">
            <h2> Karnyújtás kábelgépen, kötéllel </h2>
            <p class="description"> Ezzel a tricepszed edzed. Dőlj kicsit előre, hogy stabilan tudj állni míg lehúzod a kötéllel a súlyt. Csak az alkarod mozogjon, a felkarod stabilan a tested mellett tartsd (izolálod a hátad a tricepszedtől, hogy tudj a tricepszedre koncentrálni).</p>
            <hr>
        </div>
        <div class="right-container">
           <?php 
            if (isset($_SESSION["user"])){
             echo '<video muted autoplay loop class="vids animation-right" src="media/cablepushdown.mp4"></video>';
              }
             else {
                echo'<a href="bejelentkezes.php"><img class="gif animation-right" src="media/playbutton.png" alt="playbutton" title="Kérjük jelentkezzen be"></a>';
            }

            ?>
        </div>
    </div>
</section>


<section class="section-odd">
    <div class="double-container">
        <div>
            <img class="fillerpic animation-left" src="media/gyakorlat.png" alt="Warm Up">
        </div>
        <div>
            <h1> Melegíts be! </h1>
            <p class="training"> Minden edzés előtt kötelező bemelegíteni. Fel kell pörgetnünk minimálisan a pulzusunkat és át kell mozgatnunk azokat az izmokat és ízületeket, amelyekre edzeni fogunk, hogy elkerüljük a sérülést és a legtöbbet tudjuk kihozni magunkból.</p>
        </div>
    </div>
</section>

<section class="section-even">
    <div class="double-container">
        <h1>Húzni!</h1>
    </div>
    <div class="double-container">
        <div>
            <h2> Karhajlítás kábelgéppel </h2>
            <p class="description">A bicepszedet edzed ezzel a gyakorlattal. Figyelj arra, hogy a felkarod ne mozogjon közben, hogy más izmokat ne vonj bele a gyakorlatba. </p>
            <hr>
        </div>
        <div>
             <?php 
            if (isset($_SESSION["user"])){
             echo '<video muted autoplay loop class="vids animation-right" src="media/armflex.mp4"></video>';
              }
             else {
               echo'<a href="bejelentkezes.php"><img class="gif animation-right" src="media/playbutton.png" alt="playbutton" title="Kérjük jelentkezzen be"></a>';
            }

            ?>
        </div>
    </div>


    <div class="double-container">
        <div>
            <h2> Csigás evezés </h2>
            <p class="description"> Ez a gyakorlattal a hátad különböző részeit erősítheted fogástól és fogantyútól függően. Semleges fogású fogantyúval, egyenes háttal, mellkashoz húzva ajánlom. </p>
            <hr>
        </div>

        <div>
            <?php 
            if (isset($_SESSION["user"])){
             echo '<img class="gif animation-right" src="media/seated-row.gif" alt="Seated Rows">';
              }
             else {
                 echo'<a href="bejelentkezes.php"><img class="gif animation-right" src="media/playbutton.png" alt="playbutton" title="Kérjük jelentkezzen be"></a>';
            }

            ?>
        </div>
    </div>


    <div class="double-container">
        <div>
            <h2> Oldalemelés kézisúlyzóval </h2>
            <p class="description"> Ez az oldalsó deltádat (a vállad középső részét) dolgoztatja meg. Figyelj arra, hogy ne teljesen oldalra, hanem kicsit előre emeld a karod. </p>
            <hr>
        </div>
        <div>
           <?php 
            if (isset($_SESSION["user"])){
            echo '<video muted autoplay loop class="vids animation-right" src="media/latraise.mp4"></video>';
              }
             else {
                echo'<a href="bejelentkezes.php"><img class="gif animation-right" src="media/playbutton.png" alt="playbutton" title="Kérjük jelentkezzen be"></a>';
            }

            ?>

        </div>
    </div>
</section>


<section class="section-odd">
    <div class="double-container">
        <div>
            <img class="fillerpic animation-left" src="media/bottle.png" alt="Drink Water">
        </div>
        <div>
            <h1> Hidratálj! </h1>
            <p class="training"> Nagyon fontos edzés és nap közben is, hogy elég vizet igyál, megfelelően hidratált legyél. Legalább napi 3 liter vizet ajánlok mindenkinek, ugyanis rengeteg vizet izzadunk ki az edzéssel. </p>
        </div>
    </div>
</section>

<section class="section-even">
    <div class="double-container">
        <h1>Rúgd!</h1>
    </div>
    <div class="double-container">
        <div>
            <h2> Guggolás rúddal </h2>
            <p class="description"> A rudat tedd a megfeszített trapézizmoidra és stabilizáld a kezeddel. Figyelj arra, hogy a rúd egyenes vonalban mozogjon fel és le. A fejedet ne hajtsd előre, tartsd egyenesen és ne dőlj előre guggolás közben. </p>
            <hr>
        </div>
        <div>
          <?php 
            if (isset($_SESSION["user"])){
              echo '<video muted autoplay loop class="vids animation-right" src="media/squat.mp4"></video>';
              }
             else {
                echo'<a href="bejelentkezes.php"><img class="gif animation-right" src="media/playbutton.png" alt="playbutton" title="Kérjük jelentkezzen be"></a>';
            }

            ?>

        </div>
    </div>


    <div class="double-container">
        <div>
            <h2> Combfeszítés gépen </h2>
            <p class="description"> Kapaszkodj, mert az életed múlhat rajta. Nyújtsd ki teljesen a lábad ameddig bírod és lassan engedd vissza hajlított pozícióba. </p>
            <hr>
        </div>
        <div>
           <?php 
            if (isset($_SESSION["user"])){
              echo '<video muted autoplay loop class="vids animation-right" src="media/legex.mp4"></video>';
              }
             else {
               echo'<a href="bejelentkezes.php"><img class="gif animation-right" src="media/playbutton.png" alt="playbutton" title="Kérjük jelentkezzen be"></a>';
            }

            ?>
        </div>
    </div>
</section>

<section class="section-odd">
    <div class="double-container">
        <div>
            <img class="fillerpic animation-left" src="media/stretch.png" alt="Stretch">
        </div>
        <div>
            <h1> Nyújts! </h1>
            <p class="training"> Minden edzés után kötelező lenyújtani az edzett izomcsoportokat, ugyanis így nem lesznek kötöttek az izmaink, elkerülhető vele többnyire az izomláz és jobban regenerálódnak utána az izmok. </p>
        </div>
    </div>
</section>

<footer>
    <div class="left-footer">
        <img src="media/logo.png" alt="Logo">
        <div>
            <img src="media/coospace.png" alt="Coospace" title="GIVOQ7">
            <img src="media/coospace.png" alt="Coospace" title="RKXJ3O">
        </div>
        <div>
            <span>Huszár Attila</span>
            <span>Korfanti Dániel Mihály</span>
        </div>
    </div>
    <div class="right-footer">
        <span>© 2023 SZTE MINDEN JOG FENNTARTVA</span>
    </div>
</footer>

</body>
</html>