<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="profile__picture">
                <h1 class="profile__picuture-letter"></h1>
            </div>

            <div class="profile__title"><h1>Bienvenue</h1></div>

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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et in cupiditate numquam nulla nisi, optio, repellendus adipisci harum sunt odit nobis incidunt, maxime esse necessitatibus illum quo eaque aliquam distinctio.
                </div>
            </div>

        </div>
    </main>

</body>
</html>