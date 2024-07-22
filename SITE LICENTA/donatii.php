<html>

    <div>
        <title>Donatii</title>
        <link href="resources/css/stil.css" type="text/css" rel="stylesheet" title="Stiluri">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-B7n2I9+7DshuUOkeIOrhFJbDXCXdBbWWm99xqB6Qy5rvqJ3x0mgv6XnUPOzG2p+4" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-zjgOE4GJVu0DYzGh5D99+d/CCV0P5/fT3T4quQ4bRSrPzllt0F5M7V3s5fIgA3dd0QDbsrc0C0Eq0sDqlZMepQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <meta http-equiv="Content-type" value="text/html" charset="UTF-8" />
        <style>
            button {
                font-weight: bold; 
                font-family: "Monaco";
                padding: 5px 10px; 
                font-size: inherit; 
            }
            .top-section {
                background-color: #9b59b6; /* Mov */
                padding: 30px;
                color: rgb(70, 0, 100);

            }

                div {
                    position: relative;
                    font-size: xx-large;
                    text-align: justify;
                }

                * {
                    box-sizing: border-box
                }

                .mySlides {
                    display: none
                }

                img {
                    vertical-align: middle;
                }

                /* Slideshow container */
                .slideshow-container {
                    max-width: 1000px;
                    position: relative;
                    margin: auto;
                }

                /* Next & previous buttons */
                .prev,
                .next {
                    cursor: pointer;
                    position: absolute;
                    top: 50%;
                    width: auto;
                    padding: 16px;
                    margin-top: -22px;
                    color: white;
                    font-weight: bold;
                    font-size: 18px;
                    transition: 0.6s ease;
                    border-radius: 0 3px 3px 0;
                    user-select: none;
                }

                .next {
                    right: 0;
                    border-radius: 3px 0 0 3px;
                }

                .prev:hover,
                .next:hover {
                    background-color: #f1f1f1;
                    color: black;
                }

                .container {
                    padding: 20px;
                }

                .link {
                    display: inline-block;
                    margin-right: 10px;
                    padding: 3px 8px;
                    background-color: #9b59b6;
                    color: #fff;
                    text-decoration: none;
                    border-radius: 10px;
                    transition: all 0.3s ease;
                }

                .link:hover {
                    background-color: purple;
                }

                .container {
                    display: flex;
                }

        .link {
            display: inline-block;
            padding: 5px 10px;
            border: 1px solid #000;
            text-decoration: none;
            text-align: center;
            margin-right: 10px;
            /* adaugăm un spațiu între butoane */
            border-radius: 5px;
            /* setăm un unghi de rotație pentru a face butoanele pătrate */
        }

        .expandable-section {
            width: 100%;
            display: block;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            vertical-align: top;
        }

        .expandable-content {
            position: absolute;
            top: 100%; /* Poziționează conținutul sub imagine */
            left: 0;
            background-color: rgba(255, 255, 255, 0.8); /* Background transparent alb */
            padding: 30px;
            display: none; /* Ascunde conținutul inițial */
            padding: 50px;
                }

        .expandable-content p {
            color: black;
        }

        #animated-text {
            font-size: 24px;
            max-width: 850px; /* Lățime maximă pentru text */
            margin: 0 auto; /* Centrează containerul pe orizontală */
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            background: linear-gradient(white, lightgray);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Adaugă o umbră pentru efect */
            border-radius: 10px; /* Colțuri rotunjite */
        }

            .white-box {
                background-color: white;
                padding: 70px;
                margin: 0 50px 10px 50px; /* Marginea de sus și de jos sunt 0, iar margin-left și margin-right sunt "auto" pentru a centra elementul */
                overflow: visible;
            }
        .donate-button {
            background-color: #9b59b6;
            color: white;
            padding: 10px 20px;
            font-size: 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .donate-button:hover {
            background-color: rgb(70, 0, 100);
        }

        .quote-box {
            background-color: #9b59b6;
            /* Crem deschis */
            padding: 30px;
            /* Spațiul intern */
            border-radius: 10px;
            /* Rotunjirea colțurilor */
            margin: 30px auto;
            /* Spațiul extern */
            width: 80%;
            /* Lățimea chenarului */
            box-shadow: 0 0 20px rgba(128, 128, 128, 0.2);
            /* Efect de umbră gri deschis */
        }

        .quote {
            font-style: Monaco;
            /* Text italic */
            font-size: 40px;
            /* Dimensiunea textului */
            color: white;
            /* Culoarea textului */
        }

        .pink {
            color: #ff69b4;
        }

        .image-text {
            position: absolute;
            top: 50%;
            /* Poziționează textul la mijlocul imaginii */
            left: 50%;
            /* Centrează textul pe orizontală */
            transform: translate(-50%, -50%);
            /* Centrează textul perfect */
            font-size: 40px;
            /* Ajustează dimensiunea fontului */
            color: pink;
            /* Culoarea textului */
            background-color: rgba(0, 0, 0, 0.5);
            /* Fundal negru semi-transparent */
            padding: 10px;
            border-radius: 8px;
            /* Colțuri rotunjite pentru fundalul textului */
        }

        .separator {
            height: 20px;
        }


            .highlight {
                background-color: yellow;
            }

            .thank-you-message {
                background-color: #000;
                color: #fff;
                padding: 10px;
                font-size:10px;
            }

            .small-plus {
                font-size: 14px; /* Adjust the size as needed */
                line-height: 1;  /* Ensures the plus sign is vertically centered */
                vertical-align: middle; /* Adjusts the vertical alignment */
                margin-left: 5px; /* Optional: Add some space between the text and the plus sign */
            }


            .bordered-img {
                border: 1px solid gray; /* Adds a thin gray border */
                padding: 2px; /* Optional: Adds some padding inside the border */
                width: 100%; /* Makes images responsive and full width */
                max-width: 300px; /* Ensures all images have the same maximum width */
                height: auto; /* Maintains the aspect ratio *//* Stilizare pentru logo */
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
        .card {
    width: 100%;
    max-width: 500px; /* Lățime maximă a cardului */
    background-color: #ffffff; /* Culoare de fundal */
    padding: 20px;
    border-radius: 8px; /* Rotunjirea colțurilor */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Umbra */
    transition: box-shadow 0.4s ease; /* Tranzitie pentru umbra */
    margin-bottom: 20px; /* Spațiu între carduri */
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Umbra mai intensă la hover */
}

.card .image-container {
    overflow: hidden; /* Asigură că imaginea nu depășește limitele containerului */
    border-radius: 20px; /* Rotunjirea colțurilor containerului imaginii */
    margin-bottom: 2px; /* Spațiu între imagine și conținutul cardului */
}

.card .responsive-img {
    width: 150%;
    height: auto;
    display: block;
    border-radius:20px; /* Rotunjirea colțurilor imaginii */
}

.card .card-content {
    text-align: justify;
}

.card .donation-info {
    margin-bottom: 10px;
}

.card p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 10px;
    color: rgb(70, 0, 100);
}
.card .image-container img {
    width: 120%; /* Asigură că imaginea ocupă întreaga lățime a containerului */
    display: block; /* Elimină spațiile albe de la margini */
    border: none; /* Elimină orice bordură */
    margin: 0; /* Elimină marginile */
    padding: 0; /* Elimină orice padding */
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
/* Container style */
.container {
    display: flex;
    justify-content: space-between;
    margin: 0 auto;
    max-width: 1200px;
}

/* Card style */
.card {
    width: 400px; /* Mărimea cardului */
    height: 500px; /* Mărimea cardului */
    perspective: 1000px; /* Perspectivă pentru efectul 3D */
    position: relative;
}

/* Stil pentru fata cardului */
.card-front, .card-back {
    width: 100%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden; /* Fața și spatele cardului nu sunt vizibile simultan */
    transition: transform 0.6s; /* Tranziție pentru efectul de flip */
    padding: 20px; /* Spațiu interior */
    box-sizing: border-box; /* Calcularea corectă a dimensiunilor */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

/* Stil pentru fața cardului */
.card-front {
    transform: rotateY(0deg); /* Fața cardului */
}

/* Stil pentru spatele cardului */
.card-back {
    transform: rotateY(180deg); /* Spatele cardului */
}

/* Efectul de flip */
.flip-card:hover .card-front {
    transform: rotateY(-180deg); /* La hover, spatele cardului */
}

.flip-card:hover .card-back {
    transform: rotateY(0deg); /* La hover, fața cardului */
}

/* Stiluri pentru imagine și text */
.image-container {
    flex: 1;
    overflow: hidden;
}

.responsive-img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.bordered-img {
    border: none; /* Fără chenar */
}

.half-width-image {
    width: 100%;
}

.card-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.donation-info {
    text-align: center;
    margin-bottom: 10px;
}

/* Stiluri text */
.card-content p {
    font-size: 16px;
    color: purple;
    margin-bottom: 10px;
}
/* Container style */
.container {
    display: flex;
    justify-content: space-between;
    margin: 0 auto;
    max-width: 1200px;
}

/* Card style */
.card {
    width: 400px; /* Lățimea cardului */
    height: 500px; /* Înălțimea cardului */
    perspective: 1000px; /* Perspectivă pentru efectul 3D */
    position: relative;
    background-color: purple; /* Culoare background mov */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    overflow: hidden;
}

/* Stil pentru fata cardului */
.card-front, .card-back {
    width: 100%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden; /* Fața și spatele cardului nu sunt vizibile simultan */
    transition: transform 0.6s; /* Tranziție pentru efectul de flip */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    text-align: center;
    color: rgb(70, 0, 100);
    font-size: 24px; /* Mărimea titlului */
    font-weight: bold; /* Text bold */
}

/* Stil pentru fața cardului */
.card-front {
    transform: rotateY(0deg); /* Fața cardului */
}

/* Stil pentru spatele cardului */
.card-back {
    transform: rotateY(180deg); /* Spatele cardului */
}

/* Efectul de flip */
.flip-card:hover .card-front {
    transform: rotateY(-180deg); /* La hover, spatele cardului */
}

.flip-card:hover .card-back {
    transform: rotateY(0deg); /* La hover, fața cardului */
}

/* Stiluri pentru text */
.card-content p {
    font-size: 16px;
    text-align: justify;
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
            function toggleExpand(id) {
                var content = document.getElementById(id);
                var btn = document.querySelector('[onclick="toggleExpand(\'' + id + '\')"]');
                if (content.style.display === "none") {
                    content.style.display = "block";
                    btn.textContent = "[-]";
                } else {
                    content.style.display = "none";
                    btn.textContent = "[+]";
                }
            }


            // Funcția pentru adăugarea efectului de culoare la elementele <li>
            function colorizeDonations() {
                // Selectează toate elementele <li> din lista
                var listItems = document.querySelectorAll('ul li');
                
                // Parcurge fiecare element <li>
                listItems.forEach(function(item) {
                    // Obține textul din element
                    var text = item.textContent.trim();
                    
                    // Verifică tipul de donație și aplică o culoare corespunzătoare
                    if (text.includes('Donații unice')) {
                        item.style.color = 'purple'; // culoare pentru donații unice
                    } else if (text.includes('Donații recurente')) {
                        item.style.color = 'gray'; // culoare pentru donații recurente
                    } else if (text.includes('Donații în natură')) {
                        item.style.color = 'pinkdark'; // culoare pentru donații în natură
                    }
                });
            }

                    // Apelarea funcției pentru a adăuga efectul de culoare
                    colorizeDonations();

                    function toggleExpand(id) {
                        var content = document.getElementById(id);
                        var btn = document.querySelector('[onclick="toggleExpand(\'' + id + '\')"]');
                        if (content.style.display === "none") {
                            content.style.display = "block";
                            btn.textContent = "[-]";
                        } else {
                            content.style.display = "none";
                            btn.textContent = "[+]";
                        }
                    }

                        document.addEventListener('DOMContentLoaded', function() {
                            const animatedText = document.getElementById('animated-text');
                            animatedText.addEventListener('mouseenter', function() {
                            const spans = animatedText.querySelectorAll('.animate');
                            spans.forEach(function(span) {
                                span.style.fontSize = '20px';
                            });
                            });
                            animatedText.addEventListener('mouseleave', function() {
                            const spans = animatedText.querySelectorAll('.animate');
                            spans.forEach(function(span) {
                                span.style.fontSize = '16px';
                            });
                            });
                        });


  function toggleText() {
    var text = document.getElementById("donate-text");
    if (text.style.display === "none") {
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

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
</header>
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
    <img src="resources/images/donare.jpg" alt="Donare" style="width: 100%; height: 512px;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-150%, -50%); background-color: rgba(255, 250, 240, 0.7); padding: 20px; border: 2px solid #1d007c;">
        <div style="color: #1d007c; font-size: 50px; font-weight: bold;">
            Donează, implică-te! <br>
        </div>
        <p>Tu reprezinți viitorul!</p>
    </div>
</div>
</div>
<button class="donate-button" onclick="toggleText()">Cum pot dona?</button>
<div style="display: flex; justify-content: center;">
    <p id="donate-text" style="display: none; text-align: justify; max-width: 600px;">
        <span class="purple" style="font-size: 20px; font-weight: bold;">Pentru a face o donație, vă rugăm să transferați suma dorită în contul nostru folosind următoarele detalii:</span>
        <br>
        <span style="font-size: 15px;">Banca: Banca Transilvania</span>
        <br>
        <span style="font-size: 15px;">IBAN: RO49 AAAA 1B31 0075 9384 0000 </span>
        <br>
        <span style="font-size: 15px;">SWIFT: BTRLRO22XXX</span>
        <br><br>
        <span class="purple" style="font-size: 30px;">De asemenea, ne puteți contacta prin e-mail și telefon la următoarele coordonate:</span>
        <br>
        <span style="font-size: 15px;">Telefon: 0232 20 1000 sau Fax: 0232. 20 1201</span>
        <br>
        <span style="font-size: 15px;">Email: alumni@uaic.ro</span>
        <br>
        <span style="font-size: 15px;">Str. Bulevardul Carol I nr. 11, Iași, România</span>
        <br>
    </p>
</div>

<br><br><br>
<br><br><br>


</div>
<div class="content" style=" margin-left: 50px; margin-right: 70px;">
        <p style="font-size: 20px;text-align: justify">
        În calitate de membru valoros al comunității noastre academice, vă invităm să sprijiniți Universitatea Alexandru Ioan Cuza din Iași printr-o donație generoasă.
            <br><br>
            Donațiile dumneavoastră ajută la susținerea proiectelor educaționale, cercetării inovatoare și dezvoltării continue a infrastructurii universitare.
            <br><br>
        </p>
    </div>
</div>
<br><br>
<hr style="border-top: 3px solid gold; margin: 60px auto; max-width: 2000px;">
<p style="font-size: 20px; text-align: justify;margin-left:60px;">
        Tipuri de donații disponibile pe care le puteți face:
    </p>
    <br><br><br>

    <div class="container" style="display: flex; justify-content: space-between; margin: 0 auto; max-width: 1200px;">

<!-- Card 1 -->
<div class="card flip-card">
    <div class="card-front">
        <div class="card-content">
            <div class="donation-info">
                <span style="font-size: 20px; color: rgb(70, 0, 100);text-align: center;">Donații în bani</span>
            </div>
        </div>
    </div>
    <div class="card-back">
        <div class="card-content">
            <p style="font-size: 16px; color: rgb(70, 0, 100);">Poți dona o singură dată sau lunar, pentru a sprijini proiectele și inițiativele organizației astfel:</p>
            <p style="font-size: 16px; text-align: justify;">Email: alumni@uaic.ro</p>
            <p style="font-size: 16px; text-align: justify;">Telefon: 0232 20 1000 sau Fax: 0232. 20 1201</p>
            <p style="font-size: 16px; text-align: justify;">Banca: Banca Transilvania</p>
            <p style="font-size: 16px; text-align: justify;">IBAN: RO49 AAAA 1B31 0075 9384 0000</p>
            <p style="font-size: 16px; text-align: justify;">SWIFT: BTRLRO22XXX</p>
        </div>
    </div>
</div>

<!-- Card 2 -->
<div class="card flip-card">
    <div class="card-front">
        <div class="card-content">
            <div class="donation-info">
                <span style="font-size: 20px; color: rgb(70, 0, 100);">Donații pentru suport</span>
            </div>
        </div>
    </div>
    <div class="card-back">
        <div class="card-content">
            <p style="font-size: 16px; color: rgb(70, 0, 100);">Contribuții periodice efectuate prin furnizarea de echipamente, dispozitive și resurse educaționale necesare absolvenților și activităților derulate în cadrul UAIC.</p>
            <p style="font-size: 16px; text-align: justify;">Email: alumni@uaic.ro</p>
            <p style="font-size: 16px; text-align: justify;">Telefon: 0232 20 1000 sau Fax: 0232. 20 1201</p>
            <p style="font-size: 16px; text-align: justify;">Banca: Banca Transilvania</p>
            <p style="font-size: 16px; text-align: justify;">IBAN: RO49 AAAA 1B31 0075 9384 0000</p>
            <p style="font-size: 16px; text-align: justify;">SWIFT: BTRLRO22XXX</p>
        </div>
    </div>
</div>
</div>




<br><br><br><br><br><br>


<div class="quote-box">
    <p class="quote">"Educația este cea mai puternică armă pe care o poți folosi pentru a schimba lumea."</p>
    <p class="author">- Nelson Mandela-</p>
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
    