<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Securitate</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* culoare de fundal gri deschis */
        }

        .container {
            max-width: 800px;
            margin: 20px auto; /* centrat pe pagină */
            padding: 30px; /* spațiu interior mai mare */
            background-color: #ffffff; /* chenar alb */
            border: 2px solid #3498db; /* bordura albastra */
            border-radius: 12px; /* colturi rotunjite mai pronunțate */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* umbra subtila */
        }

        .header {
            text-align: center;
            margin-bottom: 30px; /* spațiu mai mare în partea de jos a antetului */
        }

        .header h1 {
            color: #3498db; /* culoare albastra */
            position: relative; /* pentru a permite animația */
            animation: bounce 1s ease-in-out; /* aplică animația bounce */
        }

        .politica {
            text-align: justify; /* justificare text */
            font-size: 16px;
            line-height: 1.8; /* liniatura mai mare */
            margin-bottom: 30px; /* spațiu mai mare între secțiuni */
            padding: 20px;
            background-color: #ecf0f1; /* fundal gri deschis */
            border-radius: 8px;
            border: 1px solid #bdc3c7; /* bordura gri deschis */
        }

        .politica h2 {
            color: #2c3e50; /* culoare text */
            margin-top: 0; /* elimină marginul de sus */
        }

        .politica p {
            color: #34495e; /* culoare text */
            margin-bottom: 10px; /* spațiu mai mic între paragrafe */
        }

        .footer {
            text-align: center;
            margin-top: 30px; /* spațiu mai mare în partea de sus a subsolului */
            padding: 20px 0; /* adaugă spațiu între text și marginea footer-ului */
            background-color: #3498db; /* culoare de fundal a footer-ului */
            color: #ffffff; /* culoare text a footer-ului */
        }

        .footer a {
            color: #ffffff; /* culoare link a footer-ului */
            text-decoration: none; /* elimină sublinierea link-urilor */
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

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0); /* starea inițială și finală */
            }
            50% {
                transform: translateY(-10px); /* starea de mijloc (sărind în sus) */
            }
        }
    </style>
</head>

<body>

<div class="container">
    <div class="header">
        <h1>Politica de Securitate</h1>
    </div>

    <div class="politica">
        <p>Aceasta este Politica noastră de Securitate, care asigură protecția informațiilor personale și confidențiale ale utilizatorilor noștri:</p>

        <p><strong>Confidențialitatea datelor:</strong> Ne angajăm să protejăm confidențialitatea informațiilor dumneavoastră personale și nu vom partaja aceste informații cu terțe părți fără acordul dumneavoastră explicit.</p>

        <p><strong>Securitatea datelor:</strong> Utilizăm măsuri de securitate tehnice și administrative pentru a proteja datele împotriva accesului neautorizat și a utilizării incorecte.</p>

        <p><strong>Politica de cookie-uri:</strong> Utilizăm cookie-uri pentru a îmbunătăți experiența utilizatorilor. Puteți gestiona setările cookie-urilor din browser-ul dumneavoastră conform preferințelor personale.</p>

        <p><strong>Contact:</strong> Dacă aveți întrebări sau preocupări cu privire la securitatea datelor, vă rugăm să ne contactați la adresa de email <a href="mailto:securitate@exemplu.ro">alumni@uaic.ro</a>.</p>
    </div>

    <div class="politica">
        <h2>Politica de Securitate adițională</h2>
        <p><strong>Transparență:</strong> Vă informăm asupra modului în care colectăm și utilizăm datele dumneavoastră și vă oferim opțiuni pentru gestionarea acestora.</p>

        <p><strong>Actualizări:</strong> Politica noastră de securitate este revizuită și actualizată periodic pentru a răspunde noilor cerințe legislative și tehnologice.</p>

        <p><strong>Angajament:</strong> Ne angajăm să respectăm cele mai înalte standarde de securitate și confidențialitate pentru protejarea datelor dumneavoastră personale.</p>
    </div>

    <a href="#" style="position: fixed; bottom: 20px; right: 20px; background-color: #3498db; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Înapoi sus</a>
</div>

<div class="footer">
    <p style="font-size: 18px;">
        Copyright © Alumni UAIC™ 2024<br>
        <a href="mailto:alumni@uaic.rom">alumni@uaic.ro</a><br>
    </p>
</div>

</body>
</html>
