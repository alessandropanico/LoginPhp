<?php
session_start();

$host = "localhost";
$db_username = "root";
$db_password = "220995";
$db_name = "unione";
$table_name = "utenti";

$mysqli = new mysqli($host, $db_username, $db_password, $db_name);

if ($mysqli->connect_error) {
    die('Impossibile connettersi al server: ' . $mysqli->connect_error);
}

if (isset($_POST["nome"]) && isset($_POST["password"])) {
    $nome = $mysqli->real_escape_string($_POST["nome"]);
    $password = $mysqli->real_escape_string($_POST["password"]);

    $sql = "SELECT * FROM $table_name WHERE nome=? AND password=?";
    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        die('Errore nella preparazione della query: ' . $mysqli->error);
    }

    $stmt->bind_param("ss", $nome, $password);

    if (!$stmt) {
        die('Errore nel binding dei parametri: ' . $mysqli->error);
    }

    $stmt->execute();

    if (!$stmt) {
        die("Errore nell'esecuzione della query: " . $mysqli->error);
    }

    $result = $stmt->get_result();

    if (!$result) {
        die("Errore nell'ottenimento dei risultati: " . $mysqli->error);
    }

    $conta = $result->num_rows;

    echo '<script>alert("1");</script>';
    echo "valore di conta" . $conta;
    
    if ($conta == 1) {
        echo '<script>alert("2");</script>';

        $_SESSION['nome'] = $nome;
        $_SESSION['password'] = $password; // Salva la password non crittografata nella sessione
        header("Location: loginok.php");
    } else {
        echo '<script>alert("3");</script>';
        echo "valore di conta" . $conta. "<br>";
        echo "Debug: Nome utente: $nome, Password: $password<br>";
        echo "Identificazione non riuscita: nome utente o password errati <br />";
        echo "Torna a pagina di <a href=\"index.php\">login</a>";
    }
    
    $stmt->close();
}

$mysqli->close();
?>
