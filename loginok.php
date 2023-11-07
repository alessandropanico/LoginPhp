<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header("Location: index.htm");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Area Riservata</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
	<section style="margin-top:70px">
    <div class="container">
        <h2>Identificazione utente riuscita!</h2>
        <p>Benvenuto nell'area riservata.</p>
        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
	</section>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
