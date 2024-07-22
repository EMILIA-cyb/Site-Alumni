
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Întrebări frecvente despre alumni</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #fff; /* fundal alb */
            display: grid;
            grid-template-columns: 1fr 1fr; /* 2 coloane egale */
            grid-gap: 20px; /* spațiu între coloane */
        }
        .faq {
            max-width: 600px;
            margin: 0 auto;
        }
        .question {
            margin-bottom: 20px;
            cursor: pointer;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .question:last-child {
            margin-bottom: 0; /* eliminate bottom margin for last question */
        }
        .question:hover {
            background-color: #f9f9f9;
        }
        .answer {
            display: none;
            color: #333;
            padding-left: 20px;
            margin-top: 10px; /* add space between question and answer */
        }
        .arrow::after {
            content: "\25B6";
            float: right;
        }
        .opened .arrow::after {
            content: "\25BC";
        }
        .title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-transform: uppercase;
        }
        .intro {
            margin-bottom: 20px;
            color: #666;
        }
        /* Stil pentru hr (linie subțire) */
        .question .answer hr {
            border-top: 1px solid #8a2be2; /* Mov pentru linia subțire */
            margin: 20px 0; /* Spațiere între întrebări și linie */
        }
        footer {
            grid-column: 1 / -1; /* ocupă toate coloanele */
            background-color: purple; /* mov pentru fundalul footer-ului */
            padding: 70px 40px;
            text-align: left;
            color: #fff; /* text alb în footer */
        }
        footer a {
            color: #fff; /* link-uri albe în footer */
            text-decoration: none;
            font-size: 20px;
            display: block;
            margin-bottom: 10px;
        }
        footer .button {
            background-color: gray;
            color: #fff;
            border: 2px solid #460064; /* bordură mov pentru buton */
            border-radius: 5px;
            padding: 14px 18px;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
    <script>
        function toggleAnswer(element) {
            var answer = element.querySelector('.answer');
            element.classList.toggle('opened');
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
            } else {
                answer.style.display = 'block';
            }
        }
    </script>
</head>
<body>


<div class="faq">
    <h2 class="title">Întrebări frecvente</h2>
    <p class="intro">Bine ai venit pe pagina noastră dedicată întrebărilor frecvente despre alumni! Aici vei găsi răspunsuri la cele mai comune întrebări legate de evenimente, beneficiile participării la reuniuni alumni, cum poți contribui cu fotografii sau financiar la proiectele noastre, rolul consiliului consultativ și multe altele. Explorează informațiile noastre pentru a afla cum poți să te implici și să rămâi conectat cu comunitatea.</p>
</div>

<div class="faq">
    <div class="question" onclick="toggleAnswer(this)">
        <h3 class="arrow">Unde pot găsi informații despre următorul eveniment alumni?</h3>
        <div class="answer">
            Informații despre următoarele evenimente alumni sunt disponibile pe pagina noastră oficială de Facebook și pe site-ul nostru web. Te rugăm să verifici aceste surse pentru cele mai recente actualizări și detalii despre înregistrare.
            <hr> <!-- Linie subțire mov -->
        </div>
    </div>
    
    <div class="question" onclick="toggleAnswer(this)">
        <h3 class="arrow">Care sunt beneficiile participării la reuniunile alumni?</h3>
        <div class="answer">
            Participarea la reuniunile alumni îți oferă oportunitatea de a te reconecta cu foștii colegi, de a explora oportunități profesionale și de a păstra legătura cu instituția noastră.
            <hr> <!-- Linie subțire mov -->
        </div>
    </div>
    
    <div class="question" onclick="toggleAnswer(this)">
        <h3 class="arrow">Cum pot contribui cu fotografii de la evenimentele alumni?</h3>
        <div class="answer">
            Contactează-ne direct: Poți să ne trimiți fotografiile direct prin email la adresa noastră de contact alumni@uaic.ro sau prin intermediul formularului de contact disponibil pe site-ul nostru.
            <hr> <!-- Linie subțire mov -->
        </div>
    </div>

    <div class="question" onclick="toggleAnswer(this)">
        <h3 class="arrow">Cum pot deveni membru al asociației alumni?</h3>
        <div class="answer">
            Pentru a deveni membru al asociației alumni, te rugăm să completezi formularul de înregistrare disponibil pe site-ul nostru sau să ne contactezi prin email la adresa alumni@uaic.ro pentru mai multe detalii.
            <hr> <!-- Linie subțire mov -->
        </div>
    </div>

    <div class="question" onclick="toggleAnswer(this)">
        <h3 class="arrow">Care este rolul consiliului consultativ alumni?</h3>
        <div class="answer">
            Consiliul consultativ alumni este responsabil cu oferirea de feedback și sugestii pentru îmbunătățirea activităților asociației. Membrii acestui consiliu sunt selectați din rândul absolvenților noștri și contribuie la direcționarea strategică a asociației.
            <hr> <!-- Linie subțire mov -->
        </div>
    </div>

    <div class="question" onclick="toggleAnswer(this)">
        <h3 class="arrow">Cum pot contribui financiar la proiectele asociației alumni?</h3>
        <div class="answer">
            Pentru a contribui financiar la proiectele noastre, te rugăm să vizitezi pagina de donații de pe site-ul nostru sau să ne contactezi direct prin email pentru a afla cum poți susține inițiativele noastre.
            <hr> <!-- Linie subțire mov -->
        </div>
    </div>

    <div class="question" onclick="toggleAnswer(this)">
        <h3 class="arrow">Ce resurse sunt disponibile pentru membrii asociației alumni?</h3>
        <div class="answer">
            Membrii asociației au acces la o serie de resurse exclusive, inclusiv evenimente speciale, rețele de networking, oportunități de voluntariat și reduceri la cursuri și workshop-uri organizate de asociație.
            <hr> <!-- Linie subțire mov -->
        </div>
    </div>

    <div class="question" onclick="toggleAnswer(this)">
        <h3 class="arrow">Cum pot primi actualizări despre activitățile asociației alumni?</h3>
        <div class="answer">
            Pentru a primi actualizări regulate despre activitățile noastre, te recomandăm să te abonezi la newsletter-ul nostru pe site-ul oficial sau să ne urmărești pe rețelele sociale pentru cele mai recente informații.
            <hr> <!-- Linie subțire mov -->
        </div>
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