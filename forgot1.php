<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style/forgot1.css">
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
            <p class="box__text">Enter votre email et nous vous enverrons un code d'activation pour vérifier votre compte</p>
            <form method="POST">
                <input class="box__email" name="email" placeholder="votre Adress email"/>
                <button class="box__button" name="submit" type="submit">envoyer</button>
            </form>
        </div>

    </main>
</body>
</html>

<?php
    #send email to the user
    if(isset($_POST['submit'])){
        $email = $_post['email'];
        function code(){
            for($i = 1; $i < 5; ++$i){
                return rand(0,5);
            }
        }
        require_once "mail.php";
        $mail->addAddress($email);
        $mail->Subject = "Code de activation";
        $mail->Body = "<h1> Bonjour monsieur, c'est ton code de activation envoyé par doctor-Zaid.com </h1>" .
                      "<div> code de activation <div>".
                      "<a href='http://localhost/server/forgot2.php?code=".code()."&email=".$email."'>http://localhost/server/forgot2.php?code=".$code."&email=".$email."</a>";
        $mail->setFrom("dreemerups@mail.com","doctor-Zaid.com");
        $mail->send();
    
    }
?>