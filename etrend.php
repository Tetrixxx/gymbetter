<?php 
    $activePage = 'etrend';

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
    <link rel="stylesheet" type="text/css" href="style/diet.css">
    <link rel="stylesheet" type="text/css" href="style/animations.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <script src="scripts/darkmode.js"></script>
</head>
<body>
<?php include('nav.php') ?>
<section class="section-odd">
    <div class="double-container">
        <div>
            <h1> A kockahas a konyhában készül </h1>
            <p class="eating">Az egészséges, céljainknak megfelelő étkezés elengedhetetlen minden ember számára, kifejezett akkor, ha rendszeresen tesszük ki magunkat intenzív terhelésnek. Ez természetesen szükséges a fejlődéshez. Az egészségünk megőrzéséhez és erőnk növeléséhez biztosítanunk kell a makrotápanyagokat, amelyeket meg kell próbálnunk minél jobb forrásokból bevinnünk szervezetünkbe. Ezért kell nagy hangsúlyt fektetnünk az étkezésre. Sokan ismerhetik a 70-30 "szabályt", miszerint az fogyás vagy izomépítés 70%-ban az étrendtől, 30%-ban az edzéstől függ. Még, ha nem is vesszük készpénznek ezeket a számokat, akkor is biztos, hogy egy rossz étrendet nem lehet még egy jól megtervezett edzéstervvel sem überelni. Az előbb említett makrok a fehérje, szénhidrát és zsír. Ezek azok, amelyekre nagy figyelmet kell fordítanunk a siker elérése érdekében.</p>
        </div>
        <div>
            <img class="foodpicright animation-right" src="media/foods.png" alt="Healthy Meal">
        </div>
    </div>
</section>

<section class="section-even">
    <div class="double-container">
        <h1> Fehérje </h1>
    </div>
    <div class="double-container">
        <div>
            <img class="foodpicleft animation-left" src="media/protein.png" alt="Meat">
        </div>
        <div>
            <h2>Az izmokért</h2>
            <p class="descriptionright">Ez az izmaink építőeleme, ezért játszik nagyon fontos szerepet az étrendünkben, mivel enélkül lehetetlen izmot építeni vagy a fizikumunkat megőrizni. Főként húsokban található meg legnagyobb mennyiségben, természetesen növényi úton is bevihető a szervezetbe vagy akár fehérjeporokkal.</p>
            <hr>
        </div>
    </div>
    <div class="double-container animation-pop-up">
        <table>
            <thead>
            <tr>
                <th>Ételek</th>
                <th>Fehérje (g/100g)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Csirkemell</td>
                <td>24.7</td>
            </tr>
            <tr>
                <td>Pulykamell</td>
                <td>25.9</td>
            </tr>
            <tr>
                <td>Sovány marhahús</td>
                <td>19</td>
            </tr>
            <tr>
                <td>Tojás</td>
                <td>13.5</td>
            </tr>
            <tr>
                <td>Trapista sajt</td>
                <td>28</td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="section-odd">
    <div class="double-container">
       <div>
<h1> Fehérjeporok 
<?php if (isset($_SESSION['user'])) {
            echo '<label><input type="checkbox" id="checkbox_1" style="display: none;">
                  <img src="media/csillag.png" alt="Csillag" class="icon" style="max-width: 7%;" title="Kedvenc"></label>';
    } ?>
                    </h1>
    <p class="eating"> 
            <p class="eating">A fehérjeporok a legszéleskörűbben elterjedt és beszerezhető táplálékkiegészítők. Egyszerűségük miatt teljes mértékben biztonságosak ezek is. Ez az előbbiekkel ellentétben ez nem tűnhet egy csodaszernek, ennek ellenére nagyon hasznos lehet beiktatni étrendünkbe. Nagyon egyszerűen fogyasztható egy tömegelő időszak mellett is, ugyanis inni is lehet. Széleskörűen felhasználható akár shakekben, zabkásákban vagy akár süteményekben. Az izomépítés kulcsfontosságú feltétele, hogy megfelelő mennyiségű fehérjét vigyünk be, ugyanis ebből épül az izom. Nem kötelező fogyasztani, ha húsokból és egyéb forrásokból be tudod vinni a megfelelő fehérje mennyiséget. Viszont jelentősen megkönnyítheti az életedet, ha nem tudsz elég étkezést beiktatnia a napodba.</p>
        </div>
        <div>
            <a href="https://shop.biotechusa.hu/products/iso-whey-zero-908-g"><img class="whey animation-right" src="media/whey.png" alt="Protein"></a>
        </div>
    </div>
</section>

<section class="section-odd">
    <div class="double-container">
        <div>
            <h1> Kreatin
        <?php if (isset($_SESSION['user'])) {
            echo '<label><input type="checkbox" id="checkbox_2" style="display: none;">
                  <img src="media/csillag.png" alt="Csillag" class="icon" style="max-width: 7%;" title="Kedvenc"></label>';
    } ?></h1>
            <p class="eating"> Az egyik legtöbbet kutatott táplálékkiegészítő szer a piacon, nulla negatív mellékhatással. Lényegében az izmok energiaellátásáért felel, így nagyobb teljesítménnyel leszünk képesek edzeni. Emellett vízmegkötő hatása is van, így teltebbek lesznek tőle izmaink. Ezek mellett a fáradékonyságot is csökkenti és pozitív hatással van a kognitív képességekre is. Vegán formula, amelyet növényekből nyernek ki. A testünk is előállítja, csak kis mennyiségben. Napi 5 grammot ajánlanánk, kéthetes feltöltőidőszak után, mikor ennek a dupláját ajánlott szedni.</p>
        </div>
        <div>
            <a href="https://shop.biotechusa.hu/collections/kreatinok/products/100-micronized-creatine-monohydrate-500-g"> <img class="whey animation-right" src="media/kreatin.png" alt="Kreatin"></a>
        </div>
    </div>
</section>

<section class="section-even">
    <div class="double-container">
        <h1>Szénhidrát</h1>
    </div>
    <div class="double-container">
        <div>
            <img class="foodpicleft animation-left" src="media/vegetables.png" alt="Veggies and Fruits">
        </div>
        <div>
            <h2> Az erő velem van</h2>
            <p class="descriptionright">A szénhidrát felelős a szervezetedben többek között az építő folyamatokért. Egészen pontosan ennek segítségével fogsz tudni izmot is építeni. Ez a szervezeted alapvető energiaforrása, ezért kell jelentős mennyiségben fogyasztani. Edzés közben ugyanis a kalóriákat, amelyeket elégetsz főleg a véredben található szénhidrátból teszed. Ezért ajánlott edzés előtt valami gyors felszívódású, szénhidráttartalmú ételt enni vagy italt inni.</p>
            <hr>
        </div>
    </div>
    <div class="double-container animation-pop-up">
        <table>
            <thead>
            <tr>
                <th>Ételek</th>
                <th>Szénhidrát (g/100g)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Gyümölcsök(Banán)</td>
                <td>23,8</td>
            </tr>
            <tr>
                <td>Burgonya</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Bab</td>
                <td>14</td>
            </tr>
            <tr>
                <td>Rizs(száraz)</td>
                <td>77.9</td>
            </tr>
            <tr>
                <td> Zsabpehely(száraz)</td>
                <td>55,6</td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="section-odd">
    <div class="double-container">
        <div>
            <h1> Ashwagandha
            <?php if (isset($_SESSION['user'])) {
            echo '<label><input type="checkbox" id="checkbox_3" style="display: none;">
                  <img src="media/csillag.png" alt="Csillag" class="icon" style="max-width: 7%;" title="Kedvenc"></label>';
    } ?></h1>
       <p class="eating"> Hasonlóan a kreatinhoz ennek a hatásairól is rengeteg kutatást végeztek, amellett, hogy ez az indiai gyógynövényt már több ezer éve hasznosítják Indiában és Észak-Afrikában. Csökkenti a vércukor és a kortizolszintet. Azaz segít a szorongás és a stressz leküzdésében. Hozzájárul ezzel együtt a nyugodtabb, mélyebb alvás megvalósításához. Ez számunkra kifejezetten fontos. Valamint növeli a tesztoszteronszintet, (amely nők és férfiak számára is fontos az izomépítéshez) valamint a férfiak termékenységét. Kapszulás kiszerelésekben kapható, kúraszerűen ajánlott szedni.</p>
        </div>
        <div>
           <a href="https://shop.biotechusa.hu/products/ashwagandha-60-kapszula?variant=31717388156974">  <img class="whey animation-right" src="media/ashw.png" alt="Ashwaganda"></a>
        </div>
    </div>
</section>

<section class="section-odd">
    <div class="double-container">
        <div>
            <h1> Pre-workout (Pörgető)
         <?php if (isset($_SESSION['user'])) {
            echo '<label><input type="checkbox" id="checkbox_4" style="display: none;">
                  <img src="media/csillag.png" alt="Csillag" class="icon" style="max-width: 7%;" title="Kedvenc"></label>';
    } ?></h1>
            <p class="eating"> Legtöbb esetben magas koffeintartalmú porok vagy kapszulák, amelyek olyan egyéb anyagokat tartalmaznak, amik hatására nő az izmok energiaellátása, az éberség, az izmok regeneráló képessége. Kapható koffeinmentes formában is, de nem olyan hatékonyak, mint a koffeint tartalmazók.</p>
        </div>
        <div>
            <a href="https://shop.biotechusa.hu/products/black-blood-nox-330-g?variant=40573382356"> <img class="whey animation-right" src="media/prew.png" alt="Pre-Workout"></a>
        </div>
    </div>
</section>

<section class="section-even">
    <div class="double-container">
        <h1> Zsír </h1>
    </div>
    <div class="double-container">
        <div>
            <img class="foodpicleft animation-left" src="media/nuts.png" alt="Natural Fats">
        </div>
        <div>
            <h2> Háborús tartalék </h2>
            <p class="descriptionright">A zsír alapvetően a mechanikai védőréteged felépítéséhez kell, valamint ahhoz, hogy a szervezeted energia raktárt hozhasson létre. Ebből később (ha a szervezeted nem kap elég tápanyagot) elkezd feldolgozni, hogy energiához juthasson. A számodra megfelelő mennyiség bevitelét főleg a fehérje és szénhidrát beviteleddel fogod orvosolni, de az alábbi táblázatban találsz még néhány egészséges zsírforrást.</p>
            <hr>
        </div>
    </div>
    <div class="double-container animation-pop-up">
        <table>
            <thead>
            <tr>
                <th>Ételek</th>
                <th>Zsír (g/100g)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Földimogyoró</td>
                <td>49,2</td>
            </tr>
            <tr>
                <td>Kesudió</td>
                <td>43,9</td>
            </tr>
            <tr>
                <td>Mandula</td>
                <td>49,9</td>
            </tr>
            <tr>
                <td>Napraforgómag</td>
                <td>51,5</td>
            </tr>
            <tr>
                <td> Avocado</td>
                <td>14,7</td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="section-odd">
    <div class="double-container">
        <div>
            <h1> Vitaminok
         <?php if (isset($_SESSION['user'])) {
            echo '<label><input type="checkbox" id="checkbox_5" style="display: none;">
                  <img src="media/csillag.png" alt="Csillag" class="icon" style="max-width: 7%;" title="Kedvenc"></label>';
    } ?></h1>
            <p class="eating"> Ezek is nagyon fontosak az egészséged megőrzéséhez, főleg, hogy edzel és folyamatos terhelés alatt van a szervezeted, gyorsan legyengülhetsz, ha nem pótlod a megfelelő tápanyagokat, ásványokat és vitaminokat. Ajánlott szedni A, B, C és D vitaminokat szedni. A D vitamin például hozzájárul közvetlenül a pihentető alvás eléréséhez és az energiatermeléshez. Lehet ezeket akár multivitamin formájában szedni, viszont figyeljétek miből, hány százalékát fedik le a napi beviteli mennyiségnek.</p>
        </div>
        <div>
            <a href="https://shop.biotechusa.hu/collections/vitaminok/products/multivitamin-for-men-60-tabletta"><img class="whey animation-right" src="media/vitamin.png" alt="Vitamin"></a>
        </div>
    </div>
</section>

<section class="section-odd">
    <div class="double-container">
        <div>
            <h1> Ásványi anyagok 
            <?php if (isset($_SESSION['user'])) {
            echo '<label><input type="checkbox" id="checkbox_6" style="display: none;">
                  <img src="media/csillag.png" alt="Csillag" class="icon" style="max-width: 7%;" title="Kedvenc"></label>';
    } ?></h1>         
            <p class="eating"> Ilyenek például a kalcium, magnézium, jód, foszfor, kálium és nátrium. Ezek is fontosak, ahhoz, hogy a szervezeted megfelelően tudjon működni, az izmaid ne görcsöljenek be edzés közben vagy, hogy a csontjaid is erősödjenek az izmaiddal együtt. Ezeket is érdemes tablettás kiszerelésben szedni.</p>
        </div>
        <div>
            <a href="https://shop.biotechusa.hu/collections/vitaminok/products/calcium-zinc-magnesium-100-tabletta"><img class="whey animation-right" src="media/minerals.png" alt="Minerals"></a>
        </div>
    
    </div>

</section>
<script>
    function toggleImage(checkboxId) {
        var csillag = document.getElementById(checkboxId);
        var img = csillag.parentNode.querySelector("img.icon");
        csillag.addEventListener("change", function() {
            
                if (csillag.checked) {
                img.src = "media/csillag2.png";
                // A checkbox elmentése cookie-ba
                document.cookie = checkboxId + "=true; expires=Tue, 01 Jan 2030 00:00:00 UTC; path=/;";
            } else {
                img.src = "media/csillag.png";
                // A checkbox törlése cookie-ból
                document.cookie = checkboxId + "=; expires=Tue, 01 Jan 2030 00:00:00 UTC; path=/;";
            }
        
        });
        
        //Checkbox visszaállítása
        var szines = getCookie(checkboxId);
        if (szines == "true") {
            csillag.checked = true;
            img.src = "media/csillag2.png";
        }
    }

    // Checkboxok inicializálása
    var csillagok = document.querySelectorAll("input[type=checkbox]");
    for (var i = 0; i < csillagok.length; i++) {
        toggleImage(csillagok[i].id);
    }

    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) {
            return parts.pop().split(";").shift();
        }
    }

    // Mentett sütik beolvasása és checkboxok inicializálása
    var mentettek = document.cookie.split("; ");
    for (var i = 0; i < mentettek.length; i++) {
        var süti = mentettek[i].split("=");
        if (süti.length == 2 && süti[1] == "true") {
            var checkboxId = süti[0];
            var checkbox = document.getElementById(checkboxId);
            if (checkbox) {
                checkbox.checked = true;
                var img = checkbox.parentNode.querySelector("img.icon");
                img.src = "media/csillag2.png";
            }
        }
    }
</script>
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