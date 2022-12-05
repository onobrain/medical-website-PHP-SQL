<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style/home.css">
    <link rel="stylesheet" href="../assets/style/reset.css">
    <title>Zaid-Dotcom</title>
</head>
<body>
    <!-- HEADER -->
    <main class="home">
        <div class="home__gradient">
            <?php
            require_once "usernav.php";
            ?>
            <div class="home__description">
                <h1>La meilleur online<br> medical survice dans <span><br>ouled teïma</span></h1>
                <form method="Post"><button>Prenez rendez-vous</button></form>
            </div> 
            
            <div class="home__img">
                <img src="../assets/img/doctors.png" alt="">
            </div>

        </div>
        <div class="home__partners">
            <img src="../assets/img/parn1.png" alt="" class="home__partners-img">
            <img src="../assets/img/parn2.png" alt="" class="home__partners-img">
            <img src="../assets/img/parn3.png" alt="" class="home__partners-img">
            <img src="../assets/img/parn4.png" alt="" class="home__partners-img">
        </div>
    </main>
</body>
</html>