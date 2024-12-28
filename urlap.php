<?php 
    $activePage = 'urlap';

    session_start();

    
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>GYM BETTER</title>
    <link rel="icon" href="media/icon.png">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/animations.css">
    <link rel="stylesheet" type="text/css" href="style/navbar.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/survey.css">
    <script src="scripts/darkmode.js"></script>
</head>
<body>
<?php include('nav.php') ?>
<section class="section-odd">
        <div class="double-container">
            <div class="left-container">
                <h1>Nyereményjáték</h1>
                <p>Ahhoz, hogy regisztrálhass nyereményjátékunkra, ezáltal nyerhess egy személyre szabott tervcsomagot, nem kell mást tenned, mint kitölteni az alábbi mezőket. A csomag része egy teljes étrend és hozzá tartozó edzésterv. A nyerteseket emailben értesítjük.</p>
            </div>
            <div class="right-container">
                <img class="surveypicture" src="media/surveypicture.png" alt="Survey picture">
            </div>
        </div>
        <hr>
        <div class="container">
            <form action="urlap.html" method="post" class="form">
                <h2 class="label">Személyes adatok</h2>
                <div class="form-wrapper">
                    <fieldset>
                        <div class="form-grid">
                            <input type="text" class="field" id="last-name" placeholder="Vezetéknév">
                            <input type="text" class="field" id="first-name" placeholder="Keresztnév*" required>
                            <input type="number" class="field" id="birth-year" placeholder="Születési év*" min="1924" max="2023" required>
                        </div>
                        <div class="form-grid">
                            <select class="selecter" id="gender" required>
                                <option value="" disabled selected>Nem*</option>
                                <option value="male">Férfi</option>
                                <option value="female">Nő</option>
                                <option value="other">Egyéb</option>
                                <option value="fridge">SAMSUNG RS6HA8891SL/EF HŰTŐSZEK RÉNY</option>
                            </select>
                        </div>
                    </fieldset>
                    <h2 class="label">Kapcsolattartás</h2>
                    <fieldset>
                        <div class="form-grid">
                            <input type="email" class="field" id="email" placeholder="Email cím*" required>
                            <input type="text" class="field" id="phone-number" placeholder="Telefonszám">
                        </div>
                    </fieldset>
                    <h2 class="label">Testi adottságok</h2>
                    <fieldset>
                        <div class="form-grid">
                            <input type="number" class="field" id="height" placeholder="Magasság (cm)*" min="140" max="230" required>
                            <input type="number" class="field" id="weight" placeholder="Testsúly (kg)*" min="30" max="250" required>
                            <select class="selecter" id="goal" required>
                                <option value="" disabled selected>Cél*</option>
                                <option value="male">Izomtömeg növelése</option>
                                <option value="female">Gyors fogyás</option>
                                <option value="other">Mindkettő</option>
                            </select>
                        </div>
                    </fieldset>
                    <div class="form-grid">
                        <button type="submit">Küldés</button>
                        <button type="reset">Reset</button>
                    </div>
                </div>
            </form>
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