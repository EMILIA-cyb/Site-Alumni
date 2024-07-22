<!DOCTYPE html>
<html>
<head>
<title>Beneficii</title>
<link href="resources\css\stil.css" type="text/css" rel="stylesheet" title="Stiluri">
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

   .meniu {
            text-align: center;
            background-color: #9b59b6; /* Mov */
            padding: 20px;
            border: 2px solid #9b59b6; /* Mov */
            border-radius: 1x; /* Rotunjirea colțurilor chenarului */
        }

        .header-container h1 {
            position: absolute;
            left: 50%; /* Mută titlul mai spre dreapta */
            transform: translateX(-50%);
            margin: 0;
        }

        .container p2 {
        display: inline; /* Așezarea orizontală a link-urilor */
        margin:  40px; /* Spațiere între link-uri */
         }

        .line {
        position: relative; 
        margin-top: 10px; /* Spațiere între link-uri și linie */
        z-index: 1; 
        }

         body, html {
            margin: 0;
            padding: 0;
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
        .icon {
        font-size: 24px; /* Mărimea pictogramei */
        color: #666; /* Culoarea gri */
        transition: transform 0.3s ease; /* Efect de tranziție */
    }

    .icon:hover {
        transform: scale(1.2); /* Mărește pictograma la hover */
        cursor: pointer; /* Schimbă cursorul la hover */
    }
    .container {
            background-color: rgb(70, 0, 100);
            color: white;
            padding: 20px;
            width: 60%;
            margin: 0 auto;
            text-align: justify;
            font-size: 20px;
            transition: background-color 0.5s, color 0.5s; /* Adăugăm o tranziție pentru culori */
        }

        .container:hover {
            background-color: #1d007c;
            color: white;
            cursor: pointer;
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
            function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            }

</script>
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
<div style="position: relative; width: 100%;">
    <img src="resources/images/beneficiu.jpg" alt="Descrierea imaginii" style="width: 100%; height: 512px;">
    <div style="position: absolute; top: 70%; left: 20px; transform: translateY(-50%); background-color: rgba(255, 250, 240, 0.5); padding: 40px; border: 2px solid #ccc;">
        <div style="color: black; font-size: 36px; font-weight: bold;">
            Beneficii speciale pentru absolvenți
        </div>
        <p style="color: black; font-size: 24px;">Descoperiți avantajele de a face parte din comunitatea noastră academică.</p>
    </div>
</div>


</br></br></br></br></br>


<div class="container">
    <p1 style="font-size: 25px">
        După absolvirea unei facultăți din cadrul Universității "Alexandru Ioan Cuza" din Iași, te vei alătura comunității globale a Alumni UAIC, devenind parte dintr-un grup de lideri și inovatori. Ne dorim să celebrăm împreună realizările tale, să-ți susținem continuarea învățării și să-ți oferim numeroase beneficii în cadrul acestei comunități.
    </p1>
</div>


</br></br></br></br>
<div style="background-color: #9b59b6; padding: 20px;">
<div class="beneficii">
    <div style="background-color: rgb(70, 0, 100)">
        <div style="background-color: white; padding: 20px; margin-bottom: 10px;">
            <p style="text-align: justify; font-size: 18px;"><strong><i class="fas fa-briefcase icon"></i> Oportunități de Carieră Extinse</strong><br>
            Alumni UAIC deschide uși către o gamă variată de oportunități de carieră. Fie că sunteți în căutarea primului vostru loc de muncă sau doriți să avansați în carieră, platforma vă oferă acces la stagii de practică, programe de internship și o rețea solidă de profesioniști din diverse domenii. Prin participarea activă la evenimente de networking și la sesiuni de mentorat, veți putea să vă dezvoltați abilitățile și să vă construiți o carieră de succes.</p>
        </div>
        <div style="background-color: LightGray; padding: 20px; margin-bottom: 10px;">
            <p style="text-align: justify; font-size: 18px;"><strong><i class="fas fa-user-graduate icon"></i> Dezvoltare Personală și Profesională</strong><br>
            Alumni UAIC nu este doar despre găsirea unui loc de muncă - este și despre dezvoltarea continuă a abilităților și cunoștințelor voastre. Prin participarea la programe educaționale, seminarii și workshop-uri organizate de comunitatea Alumni, veți putea să vă perfecționați competențele și să vă mențineți actualizați în fața schimbărilor din domeniul vostru de interes. Această susținere continuă vă va ajuta să vă atingeți potențialul maxim în carieră și în viața personală.</p>
        </div>
        <div style="background-color: white; padding: 20px; margin-bottom: 10px;">
            <p style="text-align: justify; font-size: 18px;"><strong><i class="fas fa-book icon"></i> Acces la Resurse și Informații Exclusive</strong><br>
            Ca membru al Alumni UAIC, veți avea acces la o varietate de resurse și informații exclusiviste, concepute pentru a vă sprijini în căutarea și menținerea unui loc de muncă satisfăcător. De la ghiduri de carieră la informații despre oportunități de angajare și programe de formare profesională, veți găsi tot ce aveți nevoie pentru a vă gestiona cariera și a vă atinge obiectivele profesionale.</p>
        </div>
        <div style="background-color: LightGray; padding: 20px;">
            <p style="text-align: justify; font-size: 18px;"><strong><i class="fas fa-users icon"></i> Comunitate Puternică și Suport Continuu</strong><br>
            Una dintre cele mai mari valori ale Alumni UAIC este comunitatea sa solidă și suportul oferit membrilor săi. Indiferent de provocările cu care vă confruntați în carieră sau în viața personală, veți găsi întotdeauna sprijin și încurajare din partea foștilor colegi și a profesioniștilor din cadrul comunității. Cu ajutorul acestui sprijin continuu, veți putea să vă depășiți obstacolele și să vă atingeți obiectivele cu încredere și determinare.</p>
        </div>
    </div>
</div>
</div>

<br>

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
