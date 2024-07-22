<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Date Generale
    $nume = $_POST['nume'];
    $nume_diploma = $_POST['nume_diploma'];
    $prenume = $_POST['prenume'];
    $data_nasterii = $_POST['data_nasterii'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $oras = $_POST['oras'];
    $tara = $_POST['tara'];

    // Date Despre Parcursul Academic
    $facultatea = $_POST['facultatea'];
    $specializarea = $_POST['specializarea'];
    $anul_absolvirii = $_POST['anul_absolvirii'];
    $master = $_POST['master'];
    $doctorat = $_POST['doctorat'];

    // Date Profesionale
    $compania = $_POST['compania'];
    $pozitia = $_POST['pozitia'];
    $domeniul = $_POST['domeniul'];

    // Implicare în Comunitatea Alumni UAIC
    $buletin = $_POST['buletin'];
    $mentor = $_POST['mentor'];
    $speaker = $_POST['speaker'];
    $prezentare_companie = $_POST['prezentare_companie'];
    $donatii = $_POST['donatii'];
    $sugestii = $_POST['sugestii'];
    $acord = isset($_POST['acord']) ? 1 : 0;

    // Start transaction
    $conn->begin_transaction();

    try {
        // Inserare în tabelul Date Generale
        $sql1 = "INSERT INTO date_generale (nume, nume_diploma, prenume, data_nasterii, telefon, email, oras, tara) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("ssssssss", $nume, $nume_diploma, $prenume, $data_nasterii, $telefon, $email, $oras, $tara);
        $stmt1->execute();
        $generale_id = $stmt1->insert_id;

        // Inserare în tabelul Date Despre Parcursul Academic
        $sql2 = "INSERT INTO parcurs_academic (generale_id, facultatea, specializarea, anul_absolvirii, master, doctorat) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("ississ", $generale_id, $facultatea, $specializarea, $anul_absolvirii, $master, $doctorat);
        $stmt2->execute();

        // Inserare în tabelul Date Profesionale
        $sql3 = "INSERT INTO date_profesionale (generale_id, compania, pozitia, domeniul) 
                VALUES (?, ?, ?, ?)";
        $stmt3 = $conn->prepare($sql3);
        $stmt3->bind_param("isss", $generale_id, $compania, $pozitia, $domeniul);
        $stmt3->execute();

        // Inserare în tabelul Implicare în Comunitatea Alumni UAIC
        $sql4 = "INSERT INTO implicare_alumni (generale_id, buletin, mentor, speaker, prezentare_companie, donatii, sugestii, acord) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt4 = $conn->prepare($sql4);
        $stmt4->bind_param("issssssi", $generale_id, $buletin, $mentor, $speaker, $prezentare_companie, $donatii, $sugestii, $acord);
        $stmt4->execute();

        // Commit transaction
        $conn->commit();

        echo "Înregistrarea a fost realizată cu succes!";
    } catch (Exception $e) {
        // Rollback transaction
        $conn->rollback();
        echo "Eroare: " . $e->getMessage();
    }

    $stmt1->close();
    $stmt2->close();
    $stmt3->close();
    $stmt4->close();
    $conn->close();
}
?>