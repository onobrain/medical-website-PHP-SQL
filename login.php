 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style/login.css">
    <link rel="stylesheet" href="assets/style/reset.css">
    <!-- JAVASCRIPT -->
    <script src="assets/javascript/logic.js" defer></script>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" defer></script>

    <title>Document</title>
 </head>
 <body>
     <main class="main">
        <div class="main__left">
            <img src="assets/img/doctor1.jpg" alt="">
        </div>
        <div class="main__right">
            <h2>connexion</h2>
            <form method="POST" class="form">

                 <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">nom</label>
                        <input type="text" name="name" id="" class="form__input" required>
                    </div>
                </div>

                
                <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">Address-email</label>
                        <input type="email" name="email" id="" class="form__input" required>
                    </div>
                </div>

                <div class="form__div">
                    <div class="form__div-input">
                        <label for="" class="form__label">Mot de pass</label>
                        <input type="password" name="password" id="" class="form__input" required>
                    </div>
                </div>

                <a href="resetInfo.php" class="form__forgot">oublié le mot de passe?</a>
                <button class="logIn" name="submit" type="submit">Connexion</button>
                <a href="index.php" class="retour">Retour</a>
            </form>
        </div>
     </main>
 </body>
 </html>

 <?php
    #import database.
    require_once "database.php";
    
    #input values
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if(isset($_POST['submit'])){
        $getuser = $database->prepare("SELECT * FROM users WHERE username = :NAME AND useremail = :EMAIL AND userpassword = :PASSWORD");
        $getuser->bindParam("NAME",$name);
        $getuser->bindParam("EMAIL",$email);
        $getuser->bindParam("PASSWORD",$password);
        $getuser->execute();

        #if the user found; 
        if($getuser->rowCount() == 1){
            $user = $getuser->fetchObject();

            session_start();
            $_SESSION['user'] = $user;
            if($_SESSION['user']->ROLE  === "USER"){
                header("location:user/index.php");
            }else if($_SESSION['user']->ROLE === "ADMIN"){
                header("location:admin/index.php");
            }else{
                echo
                '<div class="alert alert-danger" role="alert" style="position:absolute; left:0; top:0;width:100%">
                    WTF, who are you?
                </div>
              ';
            }
        }else{
            echo
            '<div class="alert alert-danger" role="alert" style="position:absolute; right:0; top:0;width:100%">
                les information sont faux!
            </div>
          ';
        }
    }
 ?>
