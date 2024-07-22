<?php
    include("config.php");
?>

<html>
<title>Membru Alumni UAIC</title>
<head>
    <meta charset="UTF-8">
    <link href="resources/css/stil.css" type="text/css" rel="stylesheet" title="Stiluri">
    <style>
        
        body {
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            padding: 0;
        }
        form {
            font-size: 4ch;
        }
        form input, form select, form textarea {
            font-size: 1ch;
        }
        img.center {
            position: absolute;
            z-index: 0;
        }
        #trimite {
            background-repeat: no-repeat;
            background-position: center;
            font-size: 10ch;
            font-family: "Monaco";
            font-weight: bold;
            border: hidden;
        }
        #trimite:hover {
            transform: scale(1.2);
        }
        fieldset {
            font-size: 25px;
        }
        legend {
            font-size: 35px;
            font-weight: bold;
        }

        footer {
            padding: 20px;
            text-align: center;
        }

        footer ul {
            list-style-type: disc; /* Setează tipul de marcator ca fiind bulină */
            text-align: left; /* Aliniere la stânga pentru a separa de buline */
            padding-left: 0; /* Elimină padding-ul implicit al listei */
        }

        footer ul li {
            margin-bottom: 5px; /* Spațiere între fiecare element de listă */
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px; /* Adaugă padding pentru spațiu interior */
            border: 2px solid black; /* Chenar negru */
            border-radius: 0;
            border: none; /* Colțuri drepte */

            box-sizing: border-box; /* Include marginile și padding-ul în lățimea totală */
        }

        .header-container h1 {
            position: absolute;
            left: 50%; /* Mută titlul mai spre dreapta */
            transform: translateX(-50%);
            margin: 0;
        }

        .meniu {
            text-align: center;
            background-color: #9b59b6; /* Mov */
            padding: 20px;
            border: 2px solid #9b59b6; /* Mov */
            border-radius: 1x; /* Rotunjirea colțurilor chenarului */
        }

        .logo {
            width: 250px; /* Ajustează dimensiunea dorită pentru logo */
            height: auto; /* Menține proporțiile imaginii */
        }

        .iconite {
            display: flex;
            gap: 10px; /* Spațiu între iconițe */
        }

        .iconite img {
            width: 40px; /* Ajustează dimensiunea dorită pentru iconițe */
            height: auto; /* Menține proporțiile imaginii */
        }
        .meniu p2 {

    display: inline-block;
    margin: 0 10px;
    position: relative;
}

.meniu p2 a {
    text-decoration: none;
    color: black; /* Schimbă această culoare în funcție de preferințe */
    padding: 10px 0;
    display: inline-block;
}

.meniu p2 a::after {
    content: '';
    display: block;
    width: 0;
    height: 3px; /* Grosimea liniei */
    background: purple; /* Culoarea liniei */
    transition: width 0.3s;
    position: absolute;
    bottom: 0;
    left: 0;
}

.meniu p2 a:hover::after {
    width: 100%;
}
input[type="text"],
    input[type="date"],
    input[type="tel"],
    input[type="email"],
    input[type="number"],
    input[type="radio"] {
        border: 2px solid #d3b0e0; /* Mov deschis */
    }

    input[type="radio"] {
        border: none; /* Radio buttons typically do not have borders, but you can adjust as needed */
    }
    .meniu a {
        text-decoration: none;
        color: inherit;
        cursor: pointer;
    }

    p2, p8 {
        display: inline;
    }
</style>
    </style>
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

</head>
</head>
    <body>
    </head>
    <body>
    <div style="background-color: #f0f0f0; padding: 10px 0; text-align: right;">
    <div class="iconite" style="display: inline-block; max-width: 450px;">
        <a href="https://www.facebook.com/AlumniUAIC" style="margin-left: 10px;" class="icon-link">
            <img src="resources/images/facebook-icon.png" width="40" height="40" class="icon">
        </a>
        <a href="https://www.instagram.com/servicii.studentiuaic/" style="margin-left: 10px;" class="icon-link">
            <img src="resources/images/instagram-icon.png" width="40" height="40" class="icon">
        </a>
        <a href="https://ro.linkedin.com/school/universitatea-%E2%80%9Ealexandru-ioan-cuza%E2%80%9D-din-ia%C8%99i/" style="margin-left: 10px;" class="icon-link">
            <img src="resources/images/linkedin-icon.png" width="40" height="40" class="icon">
        </a>
        <a href="tel:0759512233" style="margin-left: 10px;" class="icon-link">
            <img src="resources/images/telefon-icon.png" width="40" height="40" class="icon">
        </a>
        <a href="mailto:alumni@uaic.ro" style="margin-left: 10px;" class="icon-link">
            <img src="resources/images/mail-icon.png" width="40" height="40" class="icon">
        </a>
        <a href="https://api.whatsapp.com/send?phone=0759512233" style="margin-left: 10px;" class="icon-link">
            <img src="resources/images/whatsapp-icon.png" width="40" height="40" class="icon">
        </a>
        <a href="https://www.google.com/maps/place/Universitatea+%E2%80%9EAlexandru+Ioan+Cuza%E2%80%9D/@47.1743589,27.571504,17z/data=!3m1!4b1!4m6!3m5!1s0x40cafb61af5ef507:0x95f1e37c73c23e74!8m2!3d47.1743589!4d27.571504!16zL20vMDk0NXEw?entry=ttu" style="margin-left: 10px;" class="icon-link">
            <img src="resources/images/locatie-icon.png" width="40" height="40" class="icon">
        </a>
    </div>
</div>
<br><br>
<div class="meniu" id="meniu">
        <p2><a href="acasa.php">Acasă</a></p2>
        <p2><a href="evenimente.php">Evenimente</a></p2>
        <p2><a href="membru.php">Devino membru</a></p2>
        <p2><a href="donatii.php">Donații</a></p2>
        <p2><a href="galerie-foto.php">Galerie foto</a></p2>
        <p2><a href="despre-noi.php">Despre noi</a></p2>
        <p2><a href="contact.php">Contact</a></p2>
        <p2><a href="beneficii.php">Beneficii</a></p2>
        <hr class="line">
    </div>
    <img src="resources/images/membru.jpg" alt="Imagine Descriptivă" style="width: 100%; height: auto;">

    <!-- Formular de înscriere -->
    <form action="inregistrare.php" method="post" enctype="multipart/form-data">
        <h2 style="font-size: 35px;">Formular de înscriere Alumni UAIC</h2>

        <!-- Date Generale -->

    <fieldset style="text-align: justify;">
    <legend style="margin-bottom: 20px;">DATE GENERALE</legend>
    
    <div style="margin-bottom: 10px;">
        <label for="nume">Nume:</label><br>
        <input type="text" id="nume" name="nume" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="nume_diploma">Nume de pe diplomă:</label><br>
        <input type="text" id="nume_diploma" name="nume_diploma" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="prenume">Prenume:</label><br>
        <input type="text" id="prenume" name="prenume" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="data_nasterii">Data nașterii:</label><br>
        <input type="date" id="data_nasterii" name="data_nasterii" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="telefon">Număr de telefon:</label><br>
        <input type="tel" id="telefon" name="telefon" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="email">Email personal:</label><br>
        <input type="email" id="email" name="email" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="oras">Oraș de reședință:</label><br>
        <input type="text" id="oras" name="oras" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="tara">Țara de reședință:</label><br>
        <input type="text" id="tara" name="tara" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

</fieldset>


        <br>
        <!-- Date Despre Parcursul Academic -->
        <fieldset style="text-align: justify;">
    <legend style="margin-bottom: 20px;">DATE DESPRE PARCURSUL ACADEMIC</legend>
    
    <div style="margin-bottom: 10px;">
        <label for="facultatea">Facultatea absolvită:</label><br>
        <input type="text" id="facultatea" name="facultatea" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="specializarea">Specializarea:</label><br>
        <input type="text" id="specializarea" name="specializarea" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="anul_absolvirii">Anul absolvirii:</label><br>
        <input type="number" id="anul_absolvirii" name="anul_absolvirii" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label>Ați absolvit și masterul?</label><br>
        <input type="radio" name="master" value="da" required> Da<br>
        <input type="radio" name="master" value="nu" required> Nu<br>
    </div>

    <div style="margin-bottom: 10px;">
        <label>Ați urmat/urmați pregătirea prin doctorat?</label><br>
        <input type="radio" name="doctorat" value="da" required> Da<br>
        <input type="radio" name="doctorat" value="nu" required> Nu<br>
    </div>

</fieldset>

        <!-- Date Profesionale -->
        <fieldset style="text-align: justify;">
    <legend style="margin-bottom: 20px;">DATE PROFESIONALE</legend>
    
    <div style="margin-bottom: 10px;">
        <label for="compania">Compania/instituția în care activați în prezent:</label><br>
        <input type="text" id="compania" name="compania" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="pozitia">Poziția:</label><br>
        <input type="text" id="pozitia" name="pozitia" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="domeniul">Domeniul de activitate:</label><br>
        <input type="text" id="domeniul" name="domeniul" style="width: 50%; height: 50px; box-sizing: border-box; padding: 5px;" required>
    </div>

</fieldset>

        <br>
        <form action="#" method="post">
    <fieldset style="text-align: left; margin-left: 10px;">
        <legend>Implicare în Comunitatea Alumni UAIC</legend>
        
        <label style="display: block; margin-bottom: 10px;">
            Doresc să primesc buletinul informativ de la UAIC?<br>
            <input type="radio" name="buletin" value="da" required style="margin-right: 5px;"> Da
            <input type="radio" name="buletin" value="nu" required style="margin-right: 5px;"> Nu
        </label>
        
        <label style="display: block; margin-bottom: 10px;">
            Prin implicare ca mentor într-un program de mentorat profesional pentru studenți<br>
            <input type="radio" name="mentor" value="da" required style="margin-right: 5px;"> Da
            <input type="radio" name="mentor" value="nu" required style="margin-right: 5px;"> Nu
        </label>
        
        <label style="display: block; margin-bottom: 10px;">
            Prin participare ca speaker la evenimente / workshop-uri<br>
            <input type="radio" name="speaker" value="da" required style="margin-right: 5px;"> Da
            <input type="radio" name="speaker" value="nu" required style="margin-right: 5px;"> Nu
        </label>
        
        <label style="display: block; margin-bottom: 10px;">
            Prin susținerea unei prezentări de companie către studenți<br>
            <input type="radio" name="prezentare_companie" value="da" required style="margin-right: 5px;"> Da
            <input type="radio" name="prezentare_companie" value="nu" required style="margin-right: 5px;"> Nu
        </label>
        
        <label style="display: block; margin-bottom: 10px;">
            Prin donații / sponsorizări<br>
            <input type="radio" name="donatii" value="da" required style="margin-right: 5px;"> Da
            <input type="radio" name="donatii" value="nu" required style="margin-right: 5px;"> Nu
        </label>
        
        <label style="display: block; margin-bottom: 10px;">
            Sugestii și propuneri:<br>
            <textarea name="sugestii" rows="4" cols="50" style="margin-top: 5px;"></textarea>
        </label>
        
        <label style="display: block; margin-bottom: 10px;">
            <input type="checkbox" name="acord" required style="margin-right: 5px;"> 
            <span style="font-size: 20px;">Declar pe propria răspundere că îmi dau acordul cu privire la utilizarea şi prelucrarea datelor mele personale în scopul prelucrării, transmiterii, portării şi stocării datelor cu caracter personal de către Universitatea Alexandru Ioan Cuza din Iași și Fundația Universitară "Alexandru Ioan Cuza" din Iași, iar aceste date corespund realității. Scopul colectării datelor îl constituie constituirea bazei de date Alumni – UAIC. Aceste informații vor putea fi introduse de UAIC / Fundația Universitară "Alexandru Ioan Cuza" din Iași, în baza sa de date sub formă materială pe suport hârtie și electronică. Am luat la cunoștință că datele vor fi tratate confidențial, în conformitate cu prevederile Regulamentului general privind protecția datelor (RGPD) privind protecția persoanelor fizice în ceea ce privește prelucrarea datelor cu caracter personal și libera circulație a acestor date cu modificările și completările ulterioare.</span>
        </label>
        
        <div style="position: relative; display: inline-block;">
    <input type="submit" value="Trimite" style="font-size: 25px; background-color: grey; border: none;
        border-radius: 10px; padding: 10px 20px; color: white;">
    <!-- Chenarul mov -->
    <div style="position: absolute; top: 5px; left: 5px; width: calc(100% - 10px); height: calc(100% - 10px); 
                border: 2px solid purple; border-radius: 12px; z-index: -1;"></div>
    <!-- Chenarul gri -->
    <div style="position: absolute; top: 8px; left: 8px; width: calc(100% - 16px); height: calc(100% - 16px); 
                border: 2px solid grey; border-radius: 12px; z-index: -2;"></div>
</div>

</fieldset>
</form>

<footer style="padding: 70px 40px; text-align: left; display: flex; justify-content: space-between; align-items: center; margin-top: 30px;">
    <div style="text-align: left;">
        <h2 style="color: white;">Linkuri utile</h2>
        <div style="margin-top: 10px;">
            <a href="termeni.php" style="text-decoration: none; color: rgb(225, 215, 255); font-size: 20px; display: block; margin-bottom: 10px; cursor: pointer;">Termeni și condiții</a>
            <hr style="border-top: 1px solid gray; margin: 5px 0;">
            <a href="politica.php" style="text-decoration: none; color: rgb(225, 215, 255); font-size: 20px; display: block; margin-bottom: 10px; cursor: pointer;">Politica de confidențialitate</a>
            <hr style="border-top: 1px solid gray; margin: 5px 0;">
            <a href="intrebari.faq.php" style="text-decoration: none; color: rgb(225, 215, 255); font-size: 20px; display: block; cursor: pointer;">Întrebări frecvente</a>
        </div>
    </div>
    
    <p style="text-align: right; margin-bottom: 0; font-size: 30px;">
        <span style="color: gray;">Copyright © Alumni UAIC™ 2024</span><br>
        <a href="mailto:alumni@uaic.ro" style="color: rgb(225, 215, 255); text-decoration: none; font-size: 20px;">alumni@uaic.ro</a>
    </p>
    <button class="button" style="background-color: gray; color: #fff; border: 2px solid rgb(70, 0, 100); border-radius: 5px; padding: 14px 18px; cursor: pointer; font-size: 14px;" onclick="scrollToTop()">Înapoi sus</button>
</footer>
</html>
</body
