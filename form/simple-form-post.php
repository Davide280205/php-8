<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form Get</title>
</head>
<body>

    <!-- l'action invia la richiesta (il submit) al file "welcome-get.php" -->

    <form action="welcome-get.php" method="POST">

        Name: <input type="text" name="name"></input><br>
        E-mail: <input type="text" name="email"></input><br>
        <input type="submit">

    </form>
    
</body>
</html>