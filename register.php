<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style/register.css">
    <link rel="stylesheet" href="assets/style/reset.css">
    <!-- JAVASCRIPT -->
    <script src="assets/javascript/logic.js" defer></script>
    <title>Document</title>
 </head>
 <body>
     <main class="main">
        <div class="main__left">
            <img src="assets/img/doctor2.webp" alt="">
        </div>
        <div class="main__right">
            <h2>connexion</h2>
            <form method="POST" class="form">
                
                <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">Nom personnel</label>
                        <input type="text" name="" id="" class="form__input" required>
                    </div>
                </div>

                <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">Adress-email</label>
                        <input type="email" name="" id="" class="form__input" required>
                    </div>
                </div>

                <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">Mot de pass</label>
                        <input type="password" name="" id="" class="form__input" required>
                    </div>
                </div>

                <div class="form__div active">
                    <div class="form__div-input">
                        <label for="" class="form__label">Date de naissance</label>
                        <input type="date" name="" id="" class="form__input" required>
                    </div>
                </div>

                <button class="signIn">Enregistrement</button>
                <a href="index.php" class="retour">Retour</a>
            </form>
        </div>
     </main>
 </body>
 </html>