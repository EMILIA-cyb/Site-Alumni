<html>
    <!-- https://www.simpleimageresizer.com/upload -->
    <head>
        <title>Galerie foto</title>
        <script src="scripturi.js"></script>
        <link href="resources/css/stil.css" type="text/css" rel="stylesheet" title="Stiluri">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <style>
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
            width: 40px; /* Ajustează dimensiunea dorită pentru iconițe */
            height: auto; /* Menține proporțiile imaginii */
        }

header {
    padding: 20px;
    text-align: left;
    overflow: hidden; /* Ascunde textul care iese în afara headerului */
    white-space: nowrap; /* Asigură că textul nu se rupe pe mai multe linii */
}

.title {
    font-size: 2em;
    margin: 0;
    padding: 0;
    animation: slideIn 1s forwards; /* Animatie pentru a aduce textul din stanga */
    animation-delay: 0.5s; /* Delay pentru a aștepta până la afișarea titlului */
}

            @keyframes slideIn {
                0% {
                    transform: translateX(-100%);
                }
                100% {
                    transform: translateX(0);
                }
            }    

.line {
            position: absolute; /* Poziționare absolută pentru a plasa linia sub titlu */
            bottom: 0; /* Plasează linia la partea de jos a containerului header */
            left: 0; /* Așază linia începând de la marginea stângă */
            width: 100%; /* Lățimea liniei */
            height: 1px; /* Grosimea liniei */
            background-color: black; /* Culoarea liniei */
        }
        .image-container {
            margin-top: 50px; /* Spațiu de sus între imagine și marginea superioară a paginii */
            display: inline-block; /* Afisează div-ul ca un bloc */
            text-align: left; /* Aliniază conținutul textului la stânga */
            border: 1px solid #ddd; /* Adaugă o bordură subțire */
            border-radius: 8px; /* Rotunjirea colțurilor chenarului */
            overflow: hidden; /* Ascunde orice depășire a conținutului */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Umbra sub chenar */
            width: 20%; /* Lățimea chenarului */
        }

        .image-container img {
            max-width: 100%; /* Lățime maximă pentru imagine */
            height: auto; /* Menține proporțiile originale ale imaginii */
            display: block; /* Face imaginea un bloc pentru a gestiona spațiul */
        }

        .image-container p {
            margin: 10px; /* Spațiu interior pentru text */
            font-size: 14px; /* Dimensiunea fontului pentru text */
            color: #333; /* Culoare text */
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .box {
            text-align: center;
            max-width: 25%; /* Măriți lățimea chenarelor pentru a încadra conținutul */
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Măriți umbra pentru un efect mai vizibil */
            overflow: hidden;
            margin: 10px; /* Adăugați un margin între chenare */
            padding: 10px; /* Adăugați un padding pentru conținut */
           
        }

        .box img {
            width: 100%; /* Lățimea imaginii să fie 100% din chenar */
            height: auto; /* Menține proporțiile imaginii */
            display: block;
        }

        .box p {
            margin-top: 10px; /* Spațiu de sus pentru text */
            font-size: 20px; /* Măriți dimensiunea textului */
            color: black; /* Culoare text */
            text-align: justify; /* Text aliniat justificat */
            line-height: 1.5; /* Înălțimea liniei pentru un spațiu mai bun între liniile de text */
            padding: 10px; /* Padding pentru conținutul textului */
        }
        .email-link {
            text-decoration: underline;
            color: black;
            cursor: pointer;
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
        <br><br>

        <div>
    <div class="content" style=" margin-left: 50px; margin-right: 70px;">
        <p style="font-size: 20px;text-align: justify">
            Bine ați venit în galeria foto a comunității Alumni a Universității "Alexandru Ioan Cuza" din Iași! Aici veți găsi momente memorabile surprinse în cadrul evenimentelor și activităților organizate de și pentru alumni noștri. Fiecare fotografie spune o poveste despre reușitele, prieteniile și experiențele de neuitat trăite de absolvenții noștri.
            <br><br>
            Vă invităm să descoperiți frumusețea și diversitatea experiențelor Alumni UAIC. Ne dorim să continuăm să capturăm și să împărtășim momentele speciale ale comunității noastre.
            <br><br>
            Pentru trimiterea fotografiilor, vă rugăm să le trimiteți la adresa:
            <a href="mailto:alumni@uaic.ro" class="email-link">alumni@uaic.ro</a>.
        </p>
    </div>
</div>


<br><br><br><br>

        <header>
        <div class="container">
            <h1 class="title">Galerie Foto ALUMNI UAIC</h1>
            <div class="line"></div> <!-- Linia neagră -->
        </div>
    </header>
    <br><br><br><br>

    <div class="container">
        <div class="box">
            <img src="resources/images/event1.jpg" alt="Imagine exemplu">
            <p>Programul „NEXT STEP. Traininguri realizat de alumni UAIC</p>
        </div>

        <div class="box">
            <img src="resources/images/absolvire.jpg" alt="Imagine exemplu">
            <p>Ceremonia de absolvire a absolvenților specializării Statistică și Previziune Economică din cadrul Facultății de Economie și Administrarea Afacerilor UAIC</p>
        </div>

        <div class="box">
            <img src="resources/images/litere.jpg" alt="Imagine exemplu">
            <p>Ceremonia de absolvire a absolvenților Facultății de Litere UAIC</p>
        </div>
    </div>

    <br><br><br><br><br><br>

    
    <div class="container">
        <div class="box">
            <img src="resources/images/adina suhan.jpg" alt="Imagine exemplu">
            <p>Marșul Absolvenților povestit de Adina Suhan la Radio Iaşi</p>
        </div>

        <div class="box">
            <img src="resources/images/reuniune.jpg" alt="Imagine exemplu">
            <p>Reuniunea bianuală a absolvenților UAIC, în Aula Magna</p>
        </div>

        <div class="box">
            <img src="resources/images/marsul.jpg" alt="Imagine exemplu">
            <p>Marșul absolvenților UAIC din 2017</p>
        </div>
    </div>

    <br><br><br><br><br><br>

    <div class="container">
        <div class="box">
            <img src="resources/images/busines.jpg" alt="Imagine exemplu">
            <p>Alumni UAIC la Business Days Iași</p>
        </div>

        <div class="box">
            <img src="resources/images/2019.jpg" alt="Imagine exemplu">
            <p> Absolvenții promoției 2019</p>
        </div>
        <div class="box">
            <img src="resources/images/2016.jpg" alt="Imagine exemplu">
            <p>Ziua absolventului 2016</p>
        </div>
    </div>

    <br><br><br><br><br><br>


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