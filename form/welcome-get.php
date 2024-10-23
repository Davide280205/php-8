<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Get</title>
</head>
<body>

    Benvenuto <?php echo $_GET["name"]; ?> <br>

    Il tuo indirizzo E-mail è: <?php echo $_GET["email"]; ?> <br>

    
</body>
</html>

<!-- L'informazione che è spedita con un form GET (echo $_GET) è visibile a tutti, il metodo GET limita anche la quantità dell'informazione spedita (max 2000 caratteri)-->