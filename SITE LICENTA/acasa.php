<html>
<head>
<title>Acasa</title>

<link href="resources/css/stil.css" type="text/css" rel="stylesheet" title="Stiluri">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
.sectiune-alumni {
  text-align: center;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  background-color: white;
  max-width: 800px;
}

.sectiune-alumni img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}

.sectiune-alumni p {
  font-size: 18px;
  margin: 10px 0;
}

.sectiune-alumni .detalii-button {
  display: inline-block;
  padding: 10px 20px;
  margin-top: 10px;
  background-color: rgb(70, 0, 100);
  color: #fff;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  font-size: 16px;
}

.sectiune-alumni .detalii-button:hover {
  background-color: #1d007c;
}

img[src$="uaic.jpg"] {
    border: 1px solid #ccc;
    border-radius: 10px;
    max-width: 100%;
    height: auto;
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
body, html {
    margin: 0;
    padding: 0;
}

.iconite {
    display: inline-flex;
    gap: 40px; /* Spațiu între iconițe */
}

  /* Stiluri pentru slideshow-ul de testimoniale */
  .testimonial-slideshow {
            position: relative;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.2);
            color: #fff;
            text-align: center;
        }

        .testimonial-slide {
            display: none;
            padding: 20px;
        }

        .testimonial-slide p {
            font-size: 18px;
        }

        .testimonial-slide .author {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }

        .testimonial-controls {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
        }

        .testimonial-controls button {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            color: #000;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            margin-right: 40px; /* Ajustează valoarea pentru spațiul între butoane */
        }
        
        .testimonial-controls button:hover {
            background-color: rgba(255, 255, 255, 1);
        }
        
        .testimonial-controls .next-slide {
            right: 30%; /* Mută butonul mai spre stânga, modifică valoarea după cum e nevoie */
        }

        .author {
            color: rgb(70, 0, 100);
        }

        .texte {
            left: 50px;
            bottom: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .texte.show {
            opacity: 1;
        }

        .button {
            background-color: rgb(70, 0, 100);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .button:hover {
            background-color: transparent; /* Or any color value you want */
            transform: scale(1.1);
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
.meniu {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: transparent; /* Inițial meniul este transparent */
        transition: background-color 0.3s ease; /* Efect de tranziție pentru culoare */
        text-align: center;
        padding: 20px;
        border: 2px solid #9b59b6; /* Mov */
        position: relative; /* Menținem poziția relativă pentru a nu afecta comportamentul scroll-ului */
        z-index: 1000; /* Asigurăm că meniul va fi peste conținutul paginii când este fixat */
        text-align: center;
            background-color: #9b59b6; /* Mov */
            padding: 20px;
            border: 2px solid #9b59b6; /* Mov */
    }


    .header-container {
        display: flex;
        align-items: center;
        margin-right: auto;
    }

    .header-container a {
        margin-right: 10px;
    }

    .header-container img.logo {
        width: 60px;
        height: 60px;
    }

    .header-container p8 {
        font-family: Monaco, bold;
        margin-right: 10px;
    }

    .meniu p2 {
        margin-left: 10px;
        margin-right: auto;
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

    @keyframes anim-titlu1 {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes anim-titlu2 {
        0% {
            transform: translateX(-200%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
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

        // JavaScript pentru slideshow-ul de testimoniale
        document.addEventListener('DOMContentLoaded', function () {
            let currentSlide = 0;
            const slides = document.querySelectorAll('.testimonial-slide');
            const totalSlides = slides.length;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.style.display = (i === index) ? 'block' : 'none';
                });
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
            }

            document.querySelector('.next-slide').addEventListener('click', nextSlide);
            document.querySelector('.prev-slide').addEventListener('click', prevSlide);

            showSlide(currentSlide);

            setInterval(nextSlide, 3000); // Schimbare automată la fiecare 5 secunde
        });

        window.onscroll = function() { fixeazaMeniu() };

        var meniu = document.getElementById("meniu");
        var meniuTop = meniu.offsetTop;

      
    </script>
<meta http-equiv="Content-type" value="text/html" charset="UTF-8" />


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
<div class="meniu" style="display: flex; align-items: center; justify-content: space-between;">
    <div class="header-container" style="display: flex; align-items: center; margin-right: auto;">
        <a href="acasa.php" style="margin-right: 10px;">
            <img src="resources/images/logo20.png" class="logo" style="width: 60px; height: 60px;">
        </a>
        <div>
            <p8 style="font-family: Monaco, bold; margin-right: 10px;font-weight: 900;color:#301934">ALUMNI UAIC</p8>
        </div>
    </div>
    <div style="margin-left: 10px; margin-right: auto;">
        <p2><a href="acasa.php">Acasă</a></p2>
        <p2><a href="evenimente.php">Evenimente</a></p2>
        <p2><a href="membru.php">Devino membru</a></p2>
        <p2><a href="donatii.php">Donații</a></p2>
        <p2><a href="galerie-foto.php">Galerie foto</a></p2>
        <p2><a href="despre-noi.php">Despre noi</a></p2>
        <p2><a href="contact.php">Contact</a></p2>
        <p2><a href="beneficii.php">Beneficii</a></p2>
    </div>
</div>



<h1 class="anim-h1">Universitatea "ALEXANDRU IOAN CUZA" DIN IAȘI</h1>
<h2 class="anim-h2">Bine ați venit în comunitatea Alumni UAIC!</h2>
<div class="sectiune-alumni" style="border: 2px solid purple;">
    <img src="resources/images/alumni.jpg" alt="Alumni">
    <p>Vă invităm să aflați mai multe detalii despre misiunea, viziunea și valorile comunității ALUMNI UAIC. Completați formularul de adeziune, deveniți membru și contribuiți activ la formarea noilor generații.</p>
    <a href="despre-noi.php" class="detalii-button">Aflați mai multe detalii</a>
</div>


    <br><br>

    <div style="position: relative; width: 100%;">

<img src="resources/images/scrie.jpg" alt="Donare" style="width: 100%; height: 912px;">
<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 250, 240, 0.7); display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
    
    <div class="testimonial-slideshow" style="max-width: 100%; overflow: auto;">
        <h3 style="color: #1d007c; font-size: 24px; margin-bottom: 20px;">Testimoniale</h3>
        <div class="testimonial-slide" style="margin-bottom: 20px;">
            <p style="color: #1d007c; font-size: 30px; line-height: 1.5;">"UAIC a fost mai mult decât o universitate pentru mine - a fost o comunitate care m-a inspirat să îmi urmez pasiunea și să ating potențialul maxim. Profesorii remarcabili și atmosfera intelectuală au fost fundamentale în dezvoltarea mea profesională și personală."</p>
            <p class="author" style="font-style: italic;font-size: 20px; color: green">- Ana Popescu, Facultatea de Psihologie și Științe Ale Educației</p>
        </div>
        <div class="testimonial-slide" style="margin-bottom: 20px;">
            <p style="color: #1d007c; font-size: 30px; line-height: 1.5;">Experiența mea la UAIC a fost cu adevărat transformatoare. Am avut ocazia să explorez domeniile care mă pasionează și să construiesc relații de durată cu colegi și profesori de excepție. Sunt recunoscător pentru toate oportunitățile și lecțiile învățate în acești ani minunați.</p>
            <p class="author" style="font-style: italic;font-size: 20px; color: green;">- Andrei Ionescu, Facultatea de Economie și Administrarea Afacerilor</p>
        </div>
        <div class="testimonial-slide">
            <p style="color: #1d007c; font-size: 30px; line-height: 1.5;">UAIC este locul unde am descoperit nu doar cunoștințe academice, ci și abilități de viață și o rețea valoroasă de susținere. Este o onoare să fiu parte dintr-o comunitate atât de vibrantă și să contribui la succesele sale prin munca mea în domeniu.</p>
            <p class="author" style="font-style: italic;font-size: 20px; color: green;">- Maria Radu, Facultatea de Matematică</p>
        </div>
    </div>
    </div>
<!-- Butoane de control pentru slideshow -->
<div class="testimonial-controls">
    <button class="prev-slide">&lt;</button>
    <button class="next-slide">&gt;</button>
</div>
</div>
</div>
      
    <div class="newsletter" style="
    max-width: 3000px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;">
    <h3>Abonați-vă la newsletter-ul nostru</h3>
    <form action="newsletter.php" method="post" style="
        display: flex;
        justify-content: center;
        align-items: center;
    ">
        <label for="email" style="margin-right: 30px;">Introduceți adresa de email:</label>
        <input type="email" id="email" name="email" placeholder="exemplu@domeniu.com" required style="
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        ">
        <button type="submit" style="
            padding: 10px 20px;
            background-color: rgb(70, 0, 100);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        ">Abonați-vă</button>
    </form>
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






