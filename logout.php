<?php
session_start();
// Elimina le variabili di sessione impostate
$_SESSION = array();
// Elimina la sessione
session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Disconnessione</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
    <section style="margin-top:70px">
        <h2>Disconnessione riuscita</h2>
        <p>Arrivederci!</p>
    </div>
</section>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
