<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style/resetInfo.css">
    <link rel="stylesheet" href="assets/style/forgot1.css">
    <link rel="stylesheet" href="assets/style/reset.css">
    <!-- JAVASCRIPT -->
    <script src="assets/javascript/logic.js" defer></script>

    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if(!isset($_GET['code'])){
        echo '
        <main>
        <a href="login.php"><button class="retour">retour</button></a>
            <div class="box">
                <div class="box__title">Mot de pass oublié</div>
                <p class="box__text">Enter votre email et nous vous enverrons un code d`activation pour vérifier votre compte</p>
                <form method="POST">
                    <input class="box__email" name="email" placeholder="votre Adress email"/>
                    <button class="box__button" name="send" type="submit">envoyer</button>
                </form>
            </div>
        </main>
        ';
    }else if(isset($_GET['code']) && isset($_GET['email'])){
        echo '      <main>
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
                    
                    <button class="box__button" name="reset" type="submit">envoyer</button>
                </form>
            </div>
        </main>
        ';
    }
?>
</body>
</html>

<?php
    #send email to the user
    if(isset($_POST['send'])){
        $code = rand(10000,99999);
        try{
            require_once "mail.php";
            $mail->setFrom('dreemerups@mail.com','Doctor-Zaid');
            $mail->addAddress($_POST['email']);
            $mail->isHTML(true);        //Set email format to HTML
            $mail->Subject = "Code de activation";
            $mail->Body = "<h1> Bonjour monsieur, c'est ton code de activation envoyé par doctor-Zaid.com </h1>" .
                          "<a href='http://localhost/server/resetInfo.php?email=".$_POST['email']."&code=".$code."'>http://localhost/server/resetInfo.php?email=".$_POST['email']."&code=".$code."</a>";
            $mail->send();
            echo "<script> alert('un email été envoyé à ton inbox')</script>";
    
        }catch (Exception $e){
            echo "<script> Ooops! Il ya un problem <br>".$mail->ErrorInfo."</script>";
        }
    }

    if(isset($_POST['reset'])){
        if($_POST['password'] === $_POST['repassword']){
            require_once "database.php";
            $reset = $database->prepare("UPDATE users SET userpassword = :PASSWORD WHERE useremail = :EMAIL");
            $reset->bindParam("PASSWORD",$_POST['password']);
            $reset->bindParam("EMAIL",$_GET['email']);
            $reset->execute();    
            header("location:http://localhost/server/user/index.php");
        }else{
            echo '<script> alert("Le mot de pass n`est pas correct") </script>';
        }
    }
?>
