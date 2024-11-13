<!DOCTYPE html>
<html>

<head>
    <title>Collection de films</title>
    <link rel="stylesheet" href="css.css" />
</head>

<body>
    <?php
        include("login.php");
    ?>
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
        <h1>Lire un film</h1>
    </header>

    <section>

        

        <?php
        $idcon = new mysqli($host, $user, $mdp, $bdd);
        $sql = "SELECT * FROM movie";
        $result = $idcon->query($sql);
        echo "<table>";
        echo "<tr><th>ID</th><th>Title</th><th>Year</th><th>Sypnosis</th><th>Director</th><th>Created_at</th><th>Delete_at</th><th>Genre</th></tr>";
        while ($ligne = $result->fetch_object()) {
            echo "<tr><td>" . $ligne->id . "</td><td>" . $ligne->title . "</td><td>" . $ligne->year . "</td><td>" . $ligne->sypnosis . "</td><td>" . $ligne->director . "</td><td>" . $ligne->created_at . "</td><td>" . $ligne->delete_at . "</td><td>" . $ligne->genre . "</td><tr>";
        }
        $idcon->close();
        echo "</table>";
        ?>
    </section>
    <footer>
        <p>2024-2025</p>
    </footer>
</body>

</html>