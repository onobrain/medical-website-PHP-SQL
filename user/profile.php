<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style/profile.css">
    <!-- JAVASCRIPT -->
    <script src="../assets/javascript/logic.js" defer></script>
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <?php
                require_once "usernav.php";
            ?>
        </header>

        <div class="profile">
            <div class="container">
                <div class="profile__picture">
                    <div class="profile__picture-letter">H</div>
                </div>

                <div class="profile__title">Bienvenue</div>

                <div class="profile__data">

                    <form action="" class="form">
                        <div class="form__div">
                            <div class="form__div-input">
                                <label for="" class="form__label">votre nom</label>
                                <input type="text" class="form__input">
                            </div>
                        </div>

                        <div class="form__div">                        
                            <div class="form__div-input">
                                <label for="" class="form__label">votre mot de pass</label>
                                <input type="text" class="form__input">
                            </div>
                        </div>

                        <div class="form__div">
                            <div class="form__div-input">
                                <label for="" class="form__label">votre Adress-email</label>
                                <input type="email" class="form__input">
                            </div>
                        </div>

                        <button class="submit">appliquer</button>
                        <a href="index.php" class="retour">retour</a>
                    </form>
    
                    <div class="profile__text">
                        <h3>remarque</h3>
                        <p>Lorem ipsum dolor sit amet ipsum doloripsum dolor sit amet ipsum doloripsum dolor sit amet ipsum doloripsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet consectetur adipisicing elit. Et in cupiditate numquam nulla nisi, optio, repellendus adipisci harum sunt odit nobis incidunt, maxime esse necessitatibus illum quo eaque aliquam distinctio.</p>
                    </div>
                </div>

            </div>

        </div>
    </main>

</body>
</html>