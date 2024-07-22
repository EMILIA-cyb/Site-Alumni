<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume_prenume = $conn->real_escape_string($_POST['nume_prenume']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefon = $conn->real_escape_string($_POST['telefon']);
    $subiect = $conn->real_escape_string($_POST['subiect']);
    $mesaj = $conn->real_escape_string($_POST['mesaj']);

    $sql = "INSERT INTO contact (nume_prenume, email, telefon, subiect, mesaj) 
            VALUES ('$nume_prenume', '$email', '$telefon', '$subiect', '$mesaj')";

    if ($conn->query($sql) === TRUE) {
        echo "Mesajul tău a fost trimis cu succes!";
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Cerere invalidă.";
}
?>
