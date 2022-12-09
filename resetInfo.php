<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style/resetInfo.css">
    <link rel="stylesheet" href="assets/style/reset.css">
    <!-- JAVASCRIPT -->
    <script src="assets/javascript/logic.js" defer></script>

    <title>Document</title>
</head>
<body>
    <main>
    <a href="login.php"><button class="retour">retour</button></a>
        <div class="box">
            <div class="box__title">Mot de pass oublié</div>
            <p class="box__text">Enter un nouveaux mot de passe</p>
            <form method="POST" class="form">

                <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">nouveaux mot de pass</label>
                        <input type="password" name="password" id="" class="form__input" required>
                    </div>
                </div>

                <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">Entrez à nouveaux le mot de pass</label>
                        <input type="password" name="repassword" id="" class="form__input" required>
                    </div>
                </div>
                
                <button class="box__button" name="submit" type="submit">envoyer</button>
            </form>
        </div>

    </main>
</body>
</html>