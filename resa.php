<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Terres Faer</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <?PHP include('bdd.php');
    //error_reporting(0); ?>
</head>

<body>
    <nav>
        <a id="logo-nav"><img src="C:/Marilou Marsaud/mds/Partiel Projet Mars/TerresFaer/TF/img/Fichier 1Logo.svg" id="logo"></a>
        
        <div id="block-nav">
            <a class="a-nav">Le Festival</a>
            <a class="a-nav">Programmation</a>
            <a class="a-nav">Infos Pratiques</a>
            <a class="a-nav">Contact</a>
        </div>

        <button id="btn-burger">
            <ul id="burger" class="medium">
                <li><a class="a-nav" href="festival.html">Le Festival</a></li>
                <li><a class="a-nav" href="#">Programmation</a></li>
                <li><a class="a-nav" href="#">Infos Pratiques</a></li>
                <li><a class="a-nav" href="#">Contact</a></li>
            </ul>
        </button>

        <button class="BKred button" id="btn-billeterie">Billetterie</button>
   
    </nav>
    

    <h1 class="red best center marg" id="titre-festival">Réservation</h1>

    <div class="flex-column wrap">

        <h2 class="yellow extrabold center marg">Pourquoi réserver ?</h2>
        <p class="center marg black medium" id="text-resa">Chaque personne ayant réservé sa place se verra offrir une éco-cup du festival les Terres Faer. Vous pourrez récupérer votre cadeau à l'accueil du festival le jour J.<br><br>
        De plus cela nous permet d'avoir un meilleur idée du nombre de personne venant au festival et ainsi de mieux nous préparer.  </p>
    
    </div>

    <div class="flex-column wrap marg">

        <form action="resa.php" method="post" class="marg">

            <div class="flex wrap" id="form1">
                <div class="flex-column wrap marg2">        
                    <div class="marg">
                        <label class="medium"for="name">Nom <span class="red">*</span> :</label>
                        <input type="text" id="name" name="user_name" placeholder="Entrer votre nom" value="Entrer votre nom"></input>
                    </div>
                    <div class="marg">
                        <label class="medium" for="name">Prénom :</label>
                        <input type="text" id="surname" name="user_surname" value="Entrer votre prénom" placeholder="Entrer votre prénom"></input>
                    </div>
                </div>
    
                <div class="flex-column wrap">
                    <div class="marg">
                        <label class="medium" for="mail">E-mail <span class="red">*</span> :</label>
                        <input type="email" id="mail" name="user_mail" value="Entrer votre adresse email" placeholder="Entrer votre adresse email"></input>
                    </div>
                    <div class="marg">
                        <label class="medium" for="tel">Téléphone :</label>
                        <input id="tel" name="user_tel" value="Entrer votre numéro de téléphone" placeholder="Entrer votre numéro de téléphone"></input>
                    </div>
                </div>
            </div>

            <div id=select>
                <span id=ad>
                    <label class="medium" for="adulte">Nombre d'adulte <span class="red">*</span>:</label>
                    <select name="user_adulte" id="adulte">
                        <option value="a">--Veuillez choisir un nombre--</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5 ou +</option>
                    </select>
                </span>
                <span id=en>
                    <label class="medium" for="enfant">Nombre d'enfant <span class="red">*</span>:</label>
                    <select name="user_enfant" id="enfant">
                        <option value="e">--Veuillez choisir un nombre--</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5 ou +</option>
                    </select>
                </span>
            </div>

            <input class="BKblue button extrabold light" id="btn-input" type="submit" value="Envoyer" name="send" style="display:block;margin:auto;margin-top:5%" ></input>

        </form>

        <?php
            $nom = $_GET['user_name'];
            $prenom = $_GET['user_surname'];
            $mail = $_GET['user_mail'];
            $tel = $_GET['user_tel'];
            $adulte = $_GET['user_adulte'];
            $enfant = $_GET['user_enfant'];

            $erreur=0;

            if ($nom=="Entrer votre nom"){
                $erreur++;
                echo"<h3>Veuillez renseigner votre nom</h3>";
            }
            if ($mail=="Entrer votre adresse email"){
                $erreur++;
                echo"<h3>Veuillez renseigner votre adresse mail</h3>";
            }
            if ($adulte=="a"){
                $erreur++;
                echo"<h3>Veuillez renseigner le nombre d'adultes</h3>";
            }
            if ($enfant=="e"){
                $erreur ++;
                echo"<h3>Veuillez renseigner le nombre d'enfants</h3>";
            }
            if ($erreur==0){
                addData($nom, $prenom, $mail, $tel, $adulte, $enfant); 
            }
        ?>

    </div>

    <footer>
        <div id="footer">
            <div id="l1">
                <div id="tf">
                    <h1 class="ligth">Les terres Faer</h1>
                    <h2 class="yellow">17 et 18 Juin 2023,</h2>
                    <h2 class="yellow">Château de Josselin (54)</h2>
                </div>
                <div id="rs">
                    <h2>Suivez-nous</h2>
                    <span>
                        <a href=#><img class="icon" src=img/fb.png></a>
                        <a href=#><img class="icon" src=img/ig.png></a>
                        <a href=#><img class="icon" src=img/tw.png></a>
                        <a href=#><img class="icon" src=img/yt.png></a>
                    </span>
                </div>
                <div id="mentions">
                    <a href=# class="a-footer"><span>Partenaires</span></a>
                    <a href=# class="a-footer"><span>Contact</span></a>
                    <a href=# class="a-footer"><span>Mentions légales</span></a>
                    <a href=# class="a-footer"><span>Crédits</span></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        var burger = document.getElementById("burger");
        burger.style.visibility='hidden'   
        document.querySelector("#btn-burger").addEventListener('click', menu);
        function menu(){
            if (burger.style.visibility!='visible'){
                burger.style.visibility='visible'
            } else {
                burger.style.visibility='hidden'
            }
        };
    </script>
      
</body>
</html>
    
