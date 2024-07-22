<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectare la baza de date
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alumni";

    // Creează conexiunea
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifică conexiunea
    if ($conn->connect_error) {
        die("Conexiunea a eșuat: " . $conn->connect_error);
    }

    // Preia adresa de email din formular
    $email = $_POST['email'];

    // Previne injecția SQL
    $email = $conn->real_escape_string($email);

    // Inserează adresa de email în tabelul `newsletter`
    $sql = "INSERT INTO newsletter (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Te-ai abonat cu succes! Te vom contacta pe email.";
    } else {
        if ($conn->errno == 1062) {
            echo "Această adresă de email este deja abonată.";
        } else {
            echo "Eroare: " . $sql . "<br>" . $conn->error;
        }
    }

    // Închide conexiunea
    $conn->close();
}
?>