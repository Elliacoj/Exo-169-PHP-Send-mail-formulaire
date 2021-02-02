<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <div id="container">
        <form action="envoi.php" method="post">
            <div>
                <label for="message">Veuillez écrire votre message: </label>
                <input id="message" name="message" type="text" maxlength="500">
            </div>

            <div>
                <label for="mail">Adresse mail de la personne: </label>
                <input type="email" id="mail" name="mail">
            </div>

            <div>
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>
