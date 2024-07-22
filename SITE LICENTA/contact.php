<div>
    <head>
        <title>Contact</title>
        <link href="resources/css/stil.css" type="text/css" rel="stylesheet" title="Stiluri">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <style>
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

        .map-container {
                float: center; 
                margin-right: 20px; /* Adaugă un spațiu mic între iframe și restul conținutului */
                padding: 30px;
        }

        .contact-info {
            text-align: center; /* Aliniere centrată */
            margin-bottom: 20px; /* Spațiu între chenare și harta */
        }

        .contact-info > div {
            display: inline-block; /* Face ca chenarele să fie aliniate pe orizontală */
            margin: 0 10px; /* Spațiu între chenare */
            padding: 10px; /* Spațiu interior al chenarelor */
            border: 2px solid #1d007c; /* Bordură */
            border-radius: 10px; /* Margini rotunjite */
        }

         /* Stil pentru iframe */
         iframe {
            margin: 20px auto; /* Margin pentru partea de sus și de jos, iar auto pentru a centra pe orizontală */
            display: block; /* Asigură că iframe-ul ocupă întreaga lățime disponibilă */
         }

        /* Stil pentru butonul Înapoi sus */
        .texte {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px; /* Adăugare spațiu între buton și iframe */
        }

        footer {
            text-align: center;
            margin-top: 20px;
            clear: both; /* Asigură că footer-ul este plasat sub iframe */
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

        .contact-form {
            float: right;
            width: 600px; /* Ajustează dimensiunea formularului după nevoie */
            margin-top: 20px;
            background-color: #f2f2f2; /* Fundal gri deschis */
            padding: 20px; /* Spațierea conținutului în interiorul chenarului */
            border: 2px solid #ccc; /* Bordură gri deschisă */
            border-radius: 10px; /* Margini rotunjite */
        }

        .contact-form h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .contact-form form {
            text-align: left;
        }

        .contact-form label {
            display: block;
            margin-bottom: 5px;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form input[type="tel"],
        .contact-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .contact-form textarea {
            height: 150px;
        }

        .contact-form input[type="submit"] {
            background-color: #1d007c;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #2a2a72;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }        

        body, html {
            margin: 0;
            padding: 0;
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
.icon {
        transition: transform 0.3s ease;
    }

    .icon-link:hover .icon {
        transform: scale(1.2);
    }
    .anim-h1 {
        animation: anim-titlu1 3s ease forwards;
    }

    .anim-h2 {
        animation: anim-titlu2 5s ease forwards;
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

        <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        </script>

    <body>
    </head>
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
        <br><br><br><br>

 <div class="contact-info">
        <div>
            <h3><i class="far fa-envelope"></i> E-mail</h3>
            <p><a href="mailto:alumni@uaic.ro">alumni@uaic.ro</a></p>
        </div>
        <div class="address">
            <h3><i class="fas fa-map-marker-alt"></i> Adresa</h3>
            <p>Bulevardul Carol I, nr. 11<br>Iași, România</p>
        </div>
        <div>
            <h3><i class="fas fa-phone"></i> Telefon</h3>
            <p>0232 201 000</p>
        </div>
    </div>

    <div class="map-container">
        <!-- Harta Google Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.1571899625883!2d27.56892907620467!3d47.174358871153466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea%20%E2%80%9EAlexandru%20Ioan%20Cuza%E2%80%9D!5e0!3m2!1sro!2sro!4v1717849208625!5m2!1sro!2sro" width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
   
    <div class="form-container">
    <div class="contact-form" style="float: center">
    <h3 style="font-size: 25px; color: #1d007c">Ai o întrebare? Completează acest formular îți vom răspunde în cel mai scurt timp!</h3>
    <br>
    <form action="contacttb.php" method="post">
        <label for="nume_prenume">Nume și prenume:</label><br>
        <input type="text" id="nume_prenume" name="nume_prenume" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="telefon">Telefon:</label><br>
        <input type="tel" id="telefon" name="telefon" required><br>
        <label for="subiect">Subiect:</label><br>
        <input type="text" id="subiect" name="subiect" required><br>
        <label for="mesaj">Mesaj:</label><br>
        <textarea id="mesaj" name="mesaj" required></textarea><br><br>
        <input type="submit" value="Trimite">
    </form>
</div>
</div>


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