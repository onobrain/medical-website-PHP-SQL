<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style/forgot2.css">
    <link rel="stylesheet" href="assets/style/reset.css">
    <!-- JAVASCRIPT -->
    <script src="assets/javascript/logic.js" defer></script>

    <title>Document</title>
</head>
<body>
    <main>
    <a href="forgot1.php"><button class="retour">retour</button></a>
        <div class="box">
            <div class="box__title">Mot de pass oublié</div>
            <p class="box__text">Nous avons envoyé un code de vérification à votre adresse e-mail</p>
            <form method="POST">
                <input class="box__code" name="code" type="number" placeholder="code de vérification"/>
                <button class="box__button" name="submit" type="submit">envoyer</button>
            </form>
        </div>

    </main>
</body>
</html>