<!DOCTYPE html>
<html>

<head>
    <title>Collection de films</title>
    <link rel="stylesheet" href="css.css" />
</head>

<body>
    <header>
        <nav>
            <ol>
                <li><a href="Projet1.php" class="lienMenu">Accueil</a></li>
                <li><a href="ListeFilm.php" class="lienMenu">Liste des films</a></li>
                <li><a href="Lire.php" class="lienMenu">Lire un films</a></li>
                <li><a href="Ajouter.php" class="lienMenu">Ajouter un film</a></li>
                <li><a href="Modifier.php" class="lienMenu">Modifier un film</a></li>
                <li><a href="Supprimer.php" class="lienMenu">Supprimer un film</a></li>
            </ol>
        </nav>
        <h1>Ajouter un film</h1>
    </header>
    <section>
        <form action ="" method="POST">
            <label>Titre: </label>
            <input type="text" id ="titre" name="titre" required><br>
            <label>Année de sortie du film: </label>
            <input type="number" id="annee" name="annee" min = "0000" required><br>
            <label>Sypnosis: </label>
            <input type="text" id="sypnosis" name="sypnosis" required><br>
            <label>Directeur: </label>
            <input type="text" id="director" name="director" required><br>
            <label>Genre: </label>
            <input type="text" id="genre" name="genre" required><br>
            <button type="submit">Ajouter</button>
        </form>
        <?php
        if(isset($_POST["titre"])&&isset($_POST["annee"])&&isset($_POST["sypnosis"])&&isset($_POST["director"])&&isset($_POST["genre"])){
            include("login.php")
            $idcon = new mysqli($host, $user, $mdp, $bdd);
            $sql = "INSERT INTO movie";
            $result = $idcon->query($sql);        }  
        ?>
    </section>
    <footer>
        <p>2024-2025</p>
    </footer>
</body>

</html>