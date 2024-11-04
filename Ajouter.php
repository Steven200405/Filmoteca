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
                <li><a href="Projet1.html" class="lienMenu">Accueil</a></li>
                <li><a href="Lire.php" class="lienMenu">Lire tous les films</a></li>
                <li><a href="Ajouter.php" class="lienMenu">Ajouter un film</a></li>
                <li><a href="Modifier.php" class="lienMenu">Modifier un film</a></li>
                <li><a href="Supprimer.php" class="lienMenu">Supprimer un film</a></li>
            </ol>
        </nav>
        <h1>Ajouter un film</h1>
    </header>
    <section>
        <form action ="" method="POST">
            <label for="img">Image du film: </label>
            <input type="file" id="file" name="file" accept="Img/png,Img/jpeg" required><br>
            <label>Titre: </label>
            <input type="text" id ="titre" name="titre" required><br>
            <label>Date de sortie du film: </label>
            <input type="date" id="dateF" name="dateF" required><br>
            <label>Genre: </label>
            <input type="text" id="genre" name="genre" required><br>
            <label>Auteur: </label>
            <input type="text" id="genre" name="genre" required><br>
            <label>Notation: </label>
            <input type="number" id="note" name="note" required><br>
            <button>Ajouter</button>
        </form>
    </section>
    <footer>
        <p>2024-2025</p>
    </footer>
</body>

</html>