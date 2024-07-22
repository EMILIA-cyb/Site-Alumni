<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenimente</title>
    <link href="resources\css\stil.css" type="text/css" rel="stylesheet" title="Stiluri">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        div {
            position: relative;
            font-size: large; 
            text-align: justify;
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
            width: 50px; /* Ajustează dimensiunea dorită pentru iconițe */
            height: auto; /* Menține proporțiile imaginii */
        }

        * {
            box-sizing: border-box;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1200px;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: purple;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            margin-right: 2px; /* Ajustează valoarea pentru spațiul între butoane */
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: gray;
            color: black;
        }

        /* Text evenimente */
        .text {
            text-align: center;
            font-weight: bold;
            font-size: 25px;
            margin: 15px;
            border: 2px solid black; /* adaugă o bordură */
            padding: 10px; /* adaugă spațiu interior */
        }

        .bordered-paragraph {
            border: 2px solid #1d007c; /* Schimbă culoarea chenarului dacă este necesar */
            border-radius: 10px; /* Margini rotunjite */
            padding: 15px; /* Spațiu interior */
            margin-bottom: 10px; /* Spațiu între paragrafe */
            background-color: #f0f0f0; /* Fundalul paragrafului */
            color: #000; /* Culoarea textului */
        }

        .full-width {
            width: 100%;
            padding: 10px 0; /* Spațiu interior sus și jos */
            margin: 0; /* Fără margini */
            text-align: center; /* Aliniere centrală pentru conținutul intern */
        }
        footer {
            width: 100%;
            padding: 20px 0; /* adaugă un spațiu de 20px în partea de sus și de jos a conținutului */
            text-align: center; /* aliniază textul la centru */
            position: relative; /* fixează footer-ul în partea de jos a paginii */
            bottom: 0; /* plasează footer-ul la marginea de jos a paginii */
            left: 0; /* plasează footer-ul la marginea din stânga a paginii */
            right: 0; /* plasează footer-ul la marginea din dreapta a paginii */
        }

        body, html {
            margin: 0;
            padding: 0;
        }

    

    h2 {
        font-size: 30px;
        font-weight: bold;
        margin-left: 60px;
    }
    
    .event-section {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }
    
    .event-column {
        width: 45%;
        opacity: 0;
        animation: fadeIn 1s forwards;
    }
    
    .event-column {
        opacity: 0;
        transform: scale(0); /* Transformarea inițială: dimensiunea la 0 */
        transition: opacity 0.5s ease, transform 0.5s ease; /* Tranziție pentru opacitate și transformare */
        margin-bottom: 20px; /* Spațiu între coloane */
    }
    
    /* Stiluri pentru cerc */
    .circle-container {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background-color: #3399ff; /* Culoarea de fundal a cercului */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Stil pentru textul din interiorul cercului */
    .circle-text {
        color: white;
        font-size: 24px;
        text-align: center;
    }

    @keyframes expandIn {
        0% {
            opacity: 0;
            transform: scale(0.1); /* Porțiunea inițială a animației: scara de 0.1 */
        }
        100% {
            opacity: 1;
            transform: scale(1); /* Porțiunea finală a animației: scara de 1, dimensiune completă */
        }
    }

    .event-column {
        opacity: 0; /* Inițial, ascuns */
        animation: expandIn 1s ease forwards; /* Animație de 1 secundă, ease-in/out */
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
.faq {
        max-width: 2000px;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 15px;
        font-family: Arial, sans-serif;
        position: relative;
        background-color: #f0f0f0; /* Culoare de fundal pentru secțiune */
        border: 3px solid #ccc; /* Chenar cu grosime de 1px */

    }
    .question {
            cursor: pointer; /* Indicator de cursor pentru a sugera interacțiune */
            margin-bottom: 10px; /* Spațiu între întrebări */
            padding: 10px; /* Spatiere interna pentru întrebare */
            background-color: #fff; /* Culoare de fundal pentru întrebare */
            border: 1px solid #e0e0e0; /* Chneare cu grosime de 1px */
            border-radius: 5px; /* Rotunjire colțuri pentru întrebare */
        }
        /* Stiluri pentru răspunsuri */
        .answer {
            display: none; /* Inițial ascuns */
            padding: 10px; /* Spatiere interna pentru răspuns */
            margin-top: 10px; /* Spațiu deasupra răspunsului */
            background-color: #f9f9f9; /* Culoare de fundal pentru răspuns */
            border: px solid #ddd; /* Chneare cu grosime de 1px */
            border-radius: 3px; /* Rotunjire colțuri pentru răspuns */
        }
        /* Stil pentru săgeată în întrebări */
        .arrow::after {
            content: "▶"; /* Săgeată către dreapta */
            float: right; /* Afișare la dreapta */
        }
    .question {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
    }

    .question h3 {
        font-size: 18px;
        color: #555;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0;
    }

    .arrow::after {
        content: "\25B6";
        font-size: 18px;
        transition: transform 0.3s ease;
    }

    .expanded .arrow::after {
        transform: rotate(90deg);
    }

    .answer {
        font-size: 16px;
        color: white;
        display: none;
        padding-top: 10px;
    }

   
    .meniu a {
        text-decoration: none;
        color: inherit;
        cursor: pointer;
        
    }

    p2, p8 {
        display: inline;
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
</style>
    

    <script>
    let slideIndex = 1;

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }

    window.addEventListener('load', function () {
        showSlides(1);
    });

    window.addEventListener('load', function() {
        document.body.addEventListener('click', play);
        startSlideshow();
        // Start slideshow with 3-second interval
    });

    function startSlideshow() {
        setInterval(function() {plusSlides(1)}, 3000);
    }

    function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        document.addEventListener("DOMContentLoaded", function() {
        var eventColumns = document.querySelectorAll(".event-column");
        var delay = 2000; // 2 seconds delay
        
        eventColumns.forEach(function(column, index) {
            setTimeout(function() {
                column.style.opacity = "1";
            }, delay * (index + 1));
        });
    });
    function toggleAnswer(question) {
        // Selectăm răspunsul corespunzător întrebării
        var answer = question.querySelector('.answer');
        
        // Alternăm clasa 'expanded' pe întrebare pentru a schimba stilul săgeții și pentru a afișa/ascunde răspunsul
        question.classList.toggle('expanded');

        // Alternăm afișarea răspunsului
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            answer.style.display = 'block';
        }
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


<br><br><br>

<div class="center">
<div class="slideshow-container">
        <div class="mySlides">
            <img src="resources/images/leadership.jpg" style="width:1000px;height:650px;" class="center">
            <div class="text" style="background: linear-gradient(to bottom, #f0f0f0, #808080);">
            <span style="font-size: 40px;">Conferință despre leadership</span><br>
                <span style="font-size: 35px; text-align:justify">
                    <span class ="event-icon">&#128197;</span> Ora: 10:00 - 12:00<br>
                    <span class="event-icon">&#127968;</span> Locație: Aula Magna, UAIC
                </span>
            </div>
        </div>

        <div class="mySlides">
            <img src="resources/images/profesional.jpg" style="width:1000px;height:650px;" class="center">
            <div class="text" style="background: linear-gradient(to bottom, #f0f0f0, #808080);">
            <span style="font-size: 40px;">Webinar despre dezvoltarea profesională</span><br>
                <span style="font-size: 35px;">
                    <span class="event-icon">&#128197;</span> Ora: 14:00 - 16:00<br>
                    <span class="event-icon">&#127968;</span> Locație: FEAA, amfiteatrul B5
                </span>
            </div>
        </div>

        <div class="mySlides">
            <img src="resources/images/networking.png" style="width:1000px;height:650px;" class="center">
<div class="text" style="background: linear-gradient(to bottom, #f0f0f0, #808080);">
                <span style="font-size: 40px;">Workshop de socializare și networking</span><br>
                <span style="font-size: 35px;">
                    <span class="event-icon">&#128197;</span> Ora: 09:30 - 11:30<br>
                    <span class="event-icon">&#127968;</span> Locație: Sala Domeniul Științelor, UAIC
                </span>
            </div>
        </div>

        <!-- Next & previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>
    <br> <br> <br>

    <div class="event-section">
    <div class="event-column" style="opacity: 0; transition: opacity 1s ease;">
        <p class="bordered-paragraph" style="text-align: justify; font-size: 20px;">
            Alumni UAIC îți aduce cele mai inspirate evenimente! Indiferent dacă sunt conferințe captivante, webinarii informative sau workshop-uri interactive, avem ceva special pentru fiecare membru al comunității noastre.
        </p>
        <p class="bordered-paragraph" style="text-align: justify; font-size: 20px;">
            Te invităm să te alături nostru și să descoperi oportunități noi, să îți dezvolți abilitățile și să îți mărești rețeaua de contacte într-un mediu prietenos și susținător.
        </p>
        <p class="bordered-paragraph" style="text-align: justify; font-size: 20px;">
            Fii parte din comunitatea noastră vibrantă și participă la evenimentele care te inspiră și te conectează cu foștii colegi și profesori! Împreună, putem crea un mediu propice pentru învățare, dezvoltare și schimb de idei.
        </p>
    </div>
    
    <div class="event-column" style="opacity: 0; transition: opacity 1s ease;">
        <p class="bordered-paragraph" style="text-align: justify; font-size: 20px;">
            Prin intermediul evenimentelor noastre, poți să te implici activ în viața universitară post-studii, să îți împărtășești experiențele și să contribui la creșterea și consolidarea legăturilor în cadrul comunității noastre Alumni UAIC.
        </p>
        <p class="bordered-paragraph" style="text-align: justify; font-size: 20px;">
            Indiferent de domeniul tău de interes sau nivelul tău de expertiză, vei găsi mereu ceva interesant și valoros în agenda noastră bogată de evenimente.
        </p>
        <p class="bordered-paragraph" style="text-align: justify; font-size: 20px;">
            Așadar, nu rata ocazia de a face parte din experiența Alumni UAIC și de a te bucura de avantajele de a fi membru al acestei comunități dinamice!
        </p>
    </div>
</div>


<br> <br> <br> <br> <br> <br> <br> <br> <br>


<div class="background-svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
            <polygon fill="#f1e9f6" points="0,100 100,0 100,100"/>
        </svg>
    </div>
<br><br><br><br><br>
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


