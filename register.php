<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style/register.css">
    <link rel="stylesheet" href="assets/style/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <!-- JAVASCRIPT -->
    <script src="assets/javascript/logic.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" defer></script>
    <title>Document</title>
 </head>
 <body>
     <main class="main">
        <div class="main__left">
            <img src="assets/img/doctor2.webp" alt="">
        </div>
        <div class="main__right">
            <h2>S'inscrire</h2>
            <form method="POST" class="form">
                
                <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">Nom personnel</label>
                        <input type="text" name="name" id="" class="form__input" required>
                    </div>
                </div>

                <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">Adress-email</label>
                        <input type="email" name="email" id="" class="form__input" required>
                    </div>
                </div>

                <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">Mot de pass</label>
                        <input type="password" name="password" id="" class="form__input" required>
                    </div>
                </div>

                <div class="form__div active">
                    <div class="form__div-input">
                        <label for="" class="form__label">Date de naissance</label>
                        <input type="date" name="" id="age" class="form__input" required>
                    </div>
                </div>

                <button class="signIn" name="submit">Enregistrement</button>
                <a href="index.php" class="retour">Retour</a>
            </form>
        </div>
     </main>
     
 </body>
 </html>

 <?php
    if(isset($_POST['submit'])){
        require_once "database.php";
        $adduser = $database->prepare("INSERT INTO users(username,userpassword,useremail,userage,ACTIVATECODE,ROLE) VALUES(:NAME,:PASSWORD,:EMAIL,:AGE,0,USER)");
        $adduser->bindParam("NAME",$_POST['name']);
        $adduser->bindParam("PASSWORD",$_POST['password']);
        $adduser->bindParam("EMAIL",$_POST['email']);
        $adduser->bindParam("AGE",$_POST['age']);
        if($adduser->execute()){
            echo '
            <div class="alert alert-primary" role="alert">
                Vous avez été enregistré avec succès, 
            </div>
            ';
        }
    }
 ?>