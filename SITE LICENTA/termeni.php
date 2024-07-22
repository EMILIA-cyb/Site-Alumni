<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termeni și condiții</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .header h1 {
            animation: bounce 1s ease-in-out;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Stilizare pentru butonul meniu */
        .dropdown-button {
            background-color: #805ad5; /* Mov */
            background-image: linear-gradient(to right, #805ad5, #f84eb5); /* Gradient */
            color: #ffffff; /* Text alb */
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
        }

        .dropdown-button:hover {
            transform: translateY(-3px);
        }
        
    </style>
</head>

<body class="bg-gradient-to-b from-purple-600 to-gray-100">

    <div class="max-w-4xl mx-auto mt-20 bg-white border-2 border-purple-600 rounded-lg shadow-md p-6">
        <div class="text-center mb-8">
            <h1 class="text-purple-600 text-4xl font-bold">Termeni și condiții</h1>
        </div>

        <div class="text-left text-lg leading-7">
            <p>1. Prin accesarea și utilizarea acestui site web, sunteți de acord cu acești termeni și condiții în întregime. Dacă nu sunteți de acord cu acești termeni și condiții sau cu orice parte a acestora, nu utilizați acest site web.</p>

            <p>2. Utilizarea acestui site web este subiectul reglementărilor și legilor aplicabile din România.</p>

            <p>3. Informațiile pe acest site web sunt oferite cu scop informativ și educațional. Nu ne asumăm nicio responsabilitate pentru corectitudinea, actualitatea sau exhaustivitatea informațiilor.</p>

            <p>4. Sunteți de acord să utilizați acest site web doar în scopuri legale și conforme cu acești termeni și condiții.</p>

            <p>5. Ne rezervăm dreptul de a modifica acești termeni și condiții în orice moment, fără notificare prealabilă. Prin continuarea utilizării acestui site web după modificări, sunteți de acord cu noile termeni și condiții.</p>
        </div>
    </div>

    <!-- SVG pentru întoarcerea acasă -->
    <a href="acasa.php" class="fixed top-4 left-4 p-2 bg-white rounded-full shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
    </a>


    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  
    <div class="mt-20 py-8 bg-purple-600 text-white text-center">
        <p class="text-2xl">&copy; Alumni UAIC™ 2024</p>
        <p><a href="mailto:alumni@uaic.ro" class="text-white">alumni@uaic.ro</a></p>
    </div>

</body>
</html>
