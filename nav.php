<nav class="navigation">
        <ul>
            <li class="link"><a href="/recette/index.php">Accueil</a></li>
            <li class="link"><a href="/recette/addReceipt.php">Ajouter une recette</a></li>
            <li class="link"><a href="/recette/showDB.php">Voir la base de donnée</a></li>
            <li class="link"><a href="/recette/update.php">Changer la recette</a></li>
            <?php if(!isset($_SESSION['login'])){?>
            <li class="link"><a href="/recette/sessions/registerForm.php">Inscription</a></li>
            <li class="link"><a href="/recette/sessions/loginForm.php">Login</a></li>
            <?php }else{ ?>
            <li class="link"><a href="/recette/sessions/logout.php">Logout</a></li>
            <?php } ?>
        </ul>
    </nav>
    