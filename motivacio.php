<?php 
    $activePage = 'motivacio';

    session_start();

    if (!isset($_SESSION['user'])) {
        header("Location: bejelentkezes.php");
        
    }
    
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>GYM BETTER</title>
    <link rel="icon" href="media/icon.png">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/motivation.css">
    <link rel="stylesheet" type="text/css" href="style/navbar.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/animations.css">
    <script src="scripts/darkmode.js"></script>
</head>
<body>
<?php include('nav.php') ?>
<section class="section-odd">
    <div class="double-container">
        <div>
            <h1>A sport nagy emberei</h1>
            <p> Ha motivációra éhezel két szett között, tekints meg a dicsőségfalunkat, ahol a legsikeresebb, leghíresebb testépítőket és iránymutatóinkat gyűjtöttük össze, akik nekünk is segítettek a fejlődés útjára lépni. Mindannyian különböznek, de 1 dolog motiválta őket is. Az, hogy a legjobbak legyenek. Ezen fizikumok közül némelyik elérhetetlen természetes úton, viszont mivel elérhetetlen, még jobban motivál minket, hogy el akarjuk érni.</p>
        </div>
        <div>
            <a href="https://anabolicapparel.store/products/the-last-supplement-flag-87-6cm-x-142-2cm"><img class="motivationpicture animation-right" src="media/motivation.png" alt="Motivációs kép" title="https://anabolicapparel.store/products/the-last-supplement-flag-87-6cm-x-142-2cm"></a>
        </div>
    </div>
</section>
<section class="section-even">
    <div class="container">
        <div class="card-container">
            <div>
                <div class="profile-card animation-left">
                    <div class="card-picture">
                        <img src="media/Arnold.png" alt="Arnold Schwarzenegger">
                    </div>
                    <div class="card-name">
                        <p>Arnold Schwarzenegger</p>
                    </div>
                    <div class="card-details">
                        <div class="card-quote">
                            <p>7x Mr. Olympia győztes. A testépítés atyja. 1970 és 1975 között veretlen.</p>
                            <p class="quote">"Failure is not an option. Everyone has to succeed."</p>
                            <div>
                                <a href="https://www.instagram.com/schwarzenegger/?hl=en"><img class="instagram" src="media/instagram.png" alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animation-pop-up">
                <div class="profile-card animation-left">
                    <div class="card-picture">
                        <img src="media/Ronnie.png" alt="Ronnie Colemann">
                    </div>
                    <div class="card-name">
                        <p>Ronnie Colemann</p>
                    </div>
                    <div class="card-details">
                        <div class="card-quote">
                            <p>8x Mr. Olympia. Az egyik valaha volt legsikeresebb és legnagyobb testépítő. 1998 és 2005 között veretlen.</p>
                            <p class="quote">"Yeah Buddy. Light weight Baby."</p>
                            <div>
                                <a href="https://www.instagram.com/ronniecoleman8/?hl=en"><img class="instagram" src="media/instagram.png" alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="profile-card animation-right">
                    <div class="card-picture">
                        <img src="media/Cutler.png" alt="Jay Cutler">
                    </div>
                    <div class="card-name">
                        <p>Jay Cutler</p>
                    </div>
                    <div class="card-details">
                        <div class="card-quote">
                            <p>4x Mr. Olympia győztes. Ronnie legnagyobb riválisa. Ő a történelemben a harmadik Mr. Olympia, aki vissza tudta szerezni, miután azt előzőleg elvesztette a címet.</p>
                            <p class="quote">„Surround yourself with people bigger than you”</p>
                            <div>
                                <a href="https://www.instagram.com/jaycutler/?hl=en"><img class="instagram" src="media/instagram.png" alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="profile-card animation-left">
                    <div class="card-picture">
                        <img src="media/Markus.png" alt="Markus Rühl">
                    </div>
                    <div class="card-name">
                        <p>Markus Rühl</p>
                    </div>
                    <div class="card-details">
                        <div class="card-quote">
                            <p>Annak ellenére, hogy karrierje során csak 2 showt nyert, a legnagyobbak között tartják számon. Mr. Olympiát sosem nyert 70 centis karja ellenére.</p>
                            <p class="quote">„I don’t do this to be healthy. I do this to get bigger muscles”</p>
                            <div>
                                <a href="https://www.instagram.com/markusruehl/?hl=en"><img class="instagram" src="media/instagram.png" alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animation-pop-up">
                <div class="profile-card animation-left">
                    <div class="card-picture">
                        <img src="media/CBUM.png" alt="Chris Bumstead">
                    </div>
                    <div class="card-name">
                        <p>Chris (Daddy) Bumstead</p>
                    </div>
                    <div class="card-details">
                        <div class="card-quote">
                            <p>4x Mr. Olympia, Classic Physique kategória veretlen győztese 2019 óta.</p>
                            <p class="quote">„Skinny bitch”</p>
                            <div>
                                <a href="https://www.instagram.com/cbum/"><img class="instagram" src="media/instagram.png" alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="profile-card animation-right">
                    <div class="card-picture">
                        <img src="media/Noel.png" alt="Noel Deyzel">
                    </div>
                    <div class="card-name">
                        <p>(Daddy) Noel Deyzel</p>
                    </div>
                    <div class="card-details">
                        <div class="card-quote">
                            <p>IFBB nehézsúlyú testépítő. Fittness influencer és tartalomgyártó. Az utóbbi időben vált híressé tiktokon.</p>
                            <p class="quote">„This stone is so hard. Do you know what else is hard? Your muscles on creatine”</p>
                            <div>
                                <a href="https://www.instagram.com/noeldeyzel_bodybuilder/"><img class="instagram" src="media/instagram.png" alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="profile-card animation-left">
                    <div class="card-picture">
                        <img src="media/Zyzz.png" alt="Aziz Shavershian">
                    </div>
                    <div class="card-name">
                        <p>Aziz (ZYZZ) Shavershian</p>
                    </div>
                    <div class="card-details">
                        <div class="card-quote">
                            <p>Fiatalon elhunyt testépítő és influencer volt. Több millió fiatalt motivált az évek során. Halála utána legendává vált.</p>
                            <p class="quote">„Go hard, mate. The gym lifestyle is the best! Train hard, eat well, party hard”</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animation-pop-up">
                <div class="profile-card animation-left">
                    <div class="card-picture">
                        <img src="media/Bela.png" alt="Kathi Béla">
                    </div>
                    <div class="card-name">
                        <p>Kathi Béla</p>
                    </div>
                    <div class="card-details">
                        <div class="card-quote">
                            <p>Magyar testépítő, erőemelő, kétszeres Superbody abszolút győztes, WABBA-világbajnok, erőemelésben és fekvenyomásban is országos bajnok.</p>
                            <p class="quote">„NEM VAGYOK BUZIII!”</p>
                            <div>
                                <a href="https://www.instagram.com/kathibela/?hl=en"><img class="instagram" src="media/instagram.png" alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="profile-card animation-right">
                    <div class="card-picture">
                        <img src="media/Szuli.png" alt="GYM Suleiman">
                    </div>
                    <div class="card-name">
                        <p>Hasan Suleiman</p>
                    </div>
                    <div class="card-details">
                        <div class="card-quote">
                            <p> Mára országszerte híres tiktok sztárrá nőtte ki magát vicces és hasznos tartalmakkal teljes videókkal. Mindenkinek felnézhet rá és munkásságára. </p>
                            <p class="quote">„Amikor lejön a textil, akkor már csak az számít, hogy mekkora karod van”</p>
                            <div>
                                <a href="https://www.instagram.com/gymsuleiman/"><img class="instagram" src="media/instagram.png" alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-odd">
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