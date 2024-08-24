<!Doctype html>
<!-- <?php include('contact.php'); ?> -->
<html lang="fr">
    <head>
        
        <title>Ch'amis</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>            
        <header>
            <div class="conteneur">
                <div class="haut-gauche">
                    <h1>CH'AMIS</h1>
                    <h2><span>R</span>efuge <span>P</span>our <span>A</span>nimaux</h2>
                </div>
                <div class="haut-droite">
                
                </div>
                <div class="clear"></div>
                <nav>
                   <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="adoption.php">Nos chats à adopter</a></li>
                        <!-- <li><a href="ajout.php">Test ajout chat</a></li> -->
                        <li><a href="anciens.php">Nos anciens chat adoptés (NON FAIT pareil que page adopter)</a></li>
                    </ul>
                </nav>
            </div>
        </header> 
        <section>
            <div class="conteneur">
                <div class="milieu-haut-gauche">
                    <img src="img/banniere.png" class="img-logo" alt="Image d'illustration">
                </div>
                <div class="milieu-haut-droite">
                    <p><span class="gras orange">Vous êtes à la recherche d'un chat ou vous voulez voir nos réfugiés?</span><br><br>
                    Vous pouvez suivre l'actualité sur notre site web!<br>
                    </p>
                </div>
                <div class="clear"></div>
                <div class="milieu-gauche">
                    <h2>Présentation</h2>
                    <div class="milieu-gauche-profil">
                        <img src="img/logo.jpg" class="img-logo" alt="image de profil">
                    </div>
                    <div class="milieu-droite-profil">
                        <p>
                        L'association a été créée dans le but de stériliser et d'identifier les chats errants de Bessières.<br><br>
                        Après les avoir relâchés sur leur lieu de vie, nous assurons leur suivi (nourrissage et soins) en tant que "chats libres".<br><br>
                        Les plus sociables ainsi que les chatons sont placés en familles d'accueil.<br><br>
                        Ces dernières étant essentielles pour l'association, puisque n'ayant pas de refuge pour accueillir nos petits protégés,<br><br>
                        Ce sont elles qui prodiguent les soins et sociabilisent les plus timides dans l'attente d'une adoption.<br>
                        </p>
                    </div>
                    <div class="clear"></div>
                    <div class="milieu-bas-competences">
                       
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="milieu-droite">
                    <div class="cadre">
                        <h2>Information 1</h2>
                        <p>
                            Texte 1
                        </p>
                    </div>
                    <div class="cadre">
                        <h2>Information 2</h2>
                        <ul>
                            <li>Texte 1</li>
                            <li>Texte 2</li>
                        </ul>
                    </div>
                    <div class="cadre">
                        <h2>Contact</h2>
                        <form action="contact.php" method="post">
                            Votre email :<br>
                            <input type="email" name="mail" id="expediteur" title="votre email" value=""><br>
							Sujet:<br>
							<input type="text" name="sujet" value=""><br>
                            Votre message :<br>
                            <textarea id="message" name="message" title="votre message"></textarea><br>
                            <input type="submit" name="envoyer" value="Envoyer"><br>
                        </form>   
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </section>    
        <footer>
            <div class="conteneur">
                
            </div>
        </footer>
    </body>
</html>

