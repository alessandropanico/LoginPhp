<!DOCTYPE html>
<html>

<head>
    <title>Identificazione dell'utente</title>
    <!-- Includi i file CSS di Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <section style="margin-top:70px">
    <div class="d-flex justify-content-center">
    <h1>LOGIN</h1>
    </section>
    </div>
    <section style="margin-top:70px">
    <div class="container"> <!-- Aggiungi una classe "container" per il layout di Bootstrap -->
        <h2>Accesso all'area riservata</h2>
        <form action="controllalogin.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" name="invio" class="btn btn-primary">Login</button>
            <button type="reset" name="cancella" class="btn btn-secondary">Annulla</button>
        </form>
    </div>
    </section>
    <!-- Includi i file JavaScript di Bootstrap (opzionale) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
