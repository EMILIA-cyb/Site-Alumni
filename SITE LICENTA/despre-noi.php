<!DOCTYPE html>
<html>
<head>
    <title>Despre noi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="resources/css/stil.css" type="text/css" rel="stylesheet" title="Stiluri">
    <style>
      
        .box1 {
            text-align: center;
            border: 2px solid #000;
            border-radius: 10px;
            background-color: lightgray;
            padding: 20px;
            margin: 10px;
            width: 200px;
        }

        .box2 {
            text-align: center;
            border: 2px solid #000;
            border-radius: 10px;
            background-color: lightgray;
            padding: 20px;
            margin: 10px;
            width: 200px;
        }

        .box3 {
            text-align: center;
            border: 2px solid #000;
            border-radius: 10px;
            background-color: lightgray;
            padding: 50px;
            margin: 10px;
            width: 200px;
        }

        .container {
            display: flex; /* Utilizează flexbox */
            justify-content: center; /* Aliniere orizontală în centru */
            align-items: center; /* Aliniere verticală în centru */
            height: 50vh; /* Înălțimea containerului să fie egală cu înălțimea vizibilă a ferestrei */
        }

        .title-center {
            display: inline-block;
            margin: 0;
            text-align: center;
        }

        .VALORI ul li {
            font-size: 20px; /* Adjust the size as needed */
        }

        body {
            font-family: "Monaco";
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #ffffff; /* fundal alb */
            padding: 20px; /* spațiere între conținut și marginea chenarului */
            margin: 20px; /* distanță între chenar și marginile paginii */
            border: 3px solid #cccccc; /* bordură subțire gri */
            border-radius: 5px; /* margini rotunjite */
        }

        h3 {
            color: #333333; /* culoarea textului pentru titluri */
        }

        ul {
            list-style-type: none; /* eliminarea marcării listei */
            padding: 0;
        }

        li {
            margin-bottom: 10px; /* spațiere între elementele listei */
        }

        a {
            color: #333333; /* culoarea pentru linkuri, aceeași cu textul titlurilor */
            text-decoration: none; /* eliminarea sublinierii linkurilor */
        }

        .container2 {
            background-color: #9b59b6; /* Mov */
            padding: 20px;
            border: 2px solid #9b59b6; /* Mov */
            border-radius: 1x; /* Rotunjirea colțurilor chenarului */
        }

        .container p2 {
            display: inline; /* Așezarea orizontală a link-urilor */
            margin:  40px; /* Spațiere între link-uri */
            color: #9b59b6; 
        }

        .line {
            position: relative; 
            margin-top: 10px; /* Spațiere între link-uri și linie */
            z-index: 1; 
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
        .meniu {
            text-align: center;
            background-color: #9b59b6; /* Mov */
            padding: 20px;
            border: 2px solid #9b59b6; /* Mov */
            border-radius: 1x; /* Rotunjirea colțurilor chenarului */
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
        const box1 = document.querySelector('.box1');
        const box2 = document.querySelector('.box2');
        const box3 = document.querySelector('.box3');

        // Adăugăm event listener pentru fiecare div
        box1.addEventListener('click', function() {
            // Acțiunile pe care le vrei când se apasă pe box1
            console.log('Ai apăsat pe Misiune!');
            // Exemplu: Schimbarea culorii background-ului
            box1.style.backgroundColor = 'lightblue';
        });

        box2.addEventListener('click', function() {
            // Acțiunile pe care le vrei când se apasă pe box2
            console.log('Ai apăsat pe Viziune!');
            // Exemplu: Modificarea textului
            box2.querySelector('h3').textContent = 'Viziunea noastră';
        });

        box3.addEventListener('click', function() {
            // Acțiunile pe care le vrei când se apasă pe box3
            console.log('Ai apăsat pe Valori!');
            // Exemplu: Ascunderea întregului container
            document.querySelector('.container').style.display = 'none';
        });
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


<!-- Conținutul din dreapta -->
<div class="continut-dreapta">
    <img src="resources/images/alumni1.jpg" alt="Imagine Descriptivă" style="width: 70%; height: auto;">
</div>


<!-- Conținutul pentru Misiune, Viziune și Valori -->
<div class="container">
    <div class="box1">
        <h3 class="title-center"><i class="fas fa-bullseye"></i> Misiune</h3>
    </div>
    <div class="box2">
        <h3 class="title-center"><i class="fas fa-eye"></i> Viziune</h3>
    </div>
    <div class="box3">
        <h3 class="title-center"><i class="fas fa-heart"></i> Valori</h3>
    </div>
</div>


<div style="display: flex; align-items: center; background-color: white; padding: 20px;">
    <div class="misiune" style="flex: 1; box-shadow: 0px 0px 10px rgba(128, 0, 128, 0.5); padding: 20px; border-radius: 10px;">
        <h3 style="color: black; text-align: center; text-transform: uppercase; font-size: 40px; margin: 0;">MISIUNE</h3>
        <p style="color:black; text-align: justify; font-size: 25px; margin-top: 10px;">Misiunea Universității "Alexandru Ioan Cuza" este să ofere susținere continuă și oportunități de dezvoltare pentru absolvenții săi. Ne angajăm să sprijinim succesul lor profesional și să promovăm legătura continuă între alumni și universitate pentru a construi o comunitate puternică și activă.</p>
    </div>
    <img src="resources/images/mision.jpg" alt="Descrierea imaginii" style="margin-left: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(128, 0, 128, 0.5); width: 450px;">
</div>



<br><br><br><br><br>

<div class="viziune" style="display: flex; align-items: center; background-color: white; padding: 20px; margin-top: 50px;">
    <div style="flex: 1; box-shadow: 0px 0px 10px rgba(128, 0, 128, 0.5); padding: 20px; border-radius: 10px;">
        <h3 style="color: black; text-align: center; text-transform: uppercase; font-size: 40px; margin: 0;">VIZIUNE</h3>
        <p style="color: black; text-align: justify; font-size: 25px; margin-top: 10px;">Viziunea Universității "Alexandru Ioan Cuza" pentru absolvenți este să îi pregătească și să îi înzestreze cu cunoștințele, abilitățile și valorile necesare pentru a excela în cariera lor și a face o diferență semnificativă în lume. Ne angajăm să oferim resurse și sprijin adecvat pentru dezvoltarea lor profesională continuă și pentru a-i încuraja să devină lideri în domeniile lor de expertiză. Prin rețeaua noastră de absolvenți și parteneriatele cu industria și comunitatea, aspirăm să creăm oportunități abundente pentru succesul lor și să contribuim la progresul societății și al țării noastre.</p>
    </div>
    <img src="resources/images/viziune1.jpg" alt="Descrierea imaginii" style="margin-left: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(128, 0, 128, 0.5); width: 450px;">
</div>


<br><br><br><br><br>

<div class="VALORI" style="background-color: white; padding: 20px; border: 2px solid #000; border-radius: 10px; box-shadow: 0px 0px 10px rgba(128, 0, 128, 0.5); text-align: center;">
    <h3 style="color:black; text-align: center; text-transform: uppercase; font-size: 40px; margin: 0;">VALORI</h3>
    <ul style="list-style-type: none; padding: 0; text-align: justify; margin-top: 20px;">
        <li style="margin-bottom: 15px;">
            <strong>Integritate:</strong> Ne ghidăm după standarde etice înalte și suntem onești în toate acțiunile noastre.
        </li>
        <li style="margin-bottom: 15px;">
            <strong>Excelență:</strong> Ne străduim să atingem cele mai înalte standarde în educație, cercetare și servicii comunitare.
        </li>
        <li style="margin-bottom: 15px;">
            <strong>Inovație:</strong> Promovăm creativitatea și soluțiile inovatoare pentru problemele complexe ale societății.
        </li>
        <li style="margin-bottom: 15px;">
            <strong>Respect:</strong> Cultivăm un mediu de respect și incluziune, valorizând diversitatea și recunoscând contribuțiile fiecărui individ.
        </li>
        <li style="margin-bottom: 15px;">
            <strong>Responsabilitate:</strong> Ne angajăm să fim cetățeni responsabili și să contribuim pozitiv la dezvoltarea comunității noastre și la soluționarea provocărilor globale.
        </li>
        <li>
            <strong>Colaborare:</strong> Încurajăm parteneriatele și munca în echipă pentru a atinge obiective comune, împărtășind și valorificând diversitatea de idei și perspective.
        </li>
    </ul>
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
