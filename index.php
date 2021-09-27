
<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="/mail.php">
    <label for="naam">Naam:</label><br>
    <input type="text" id="naam" name="naam" value=""><br>
    <label for="email">E-mail:</label><br>
    <input type="text" id="email" name="email" value=""><br><br>
    <label for="omschrijving">Omschrijving klacht :</label><br>
    <input type="text" id="omschrijving" name="omschrijving" value=""><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
