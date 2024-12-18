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
        <h1>Collection de films</h1>
        <p>Bienvenue sur <b>Filmoteca</b>, où tu peux retrouver toutes sortes de films du monde.</p>
    </header>

    <section>
        <h3>Voici une liste des films préférés de nos utilisateurs</h2>
            <table>
                <tr>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Genre</th>
                    <th>Auteur</th>
                    <th>Notation</th>
                </tr>
                <tr>
                    <td><img src="./Image/Loup-Garou.jpg" alt="Loup-Garou img" /></td>
                    <td>Loups-Garous</td>
                    <td>23/10/2024</td>
                    <td>Aventure, Comédie, Fantastique</td>
                    <td>François Uzan</td>
                    <td>1,9/5</td>
                </tr>
                <tr>
                    <td><img src="./Image/Proie-du-diable.jpg" alt="La Proie du diable img" /></td>
                    <td>La Proie du diable</td>
                    <td>26/10/2022</td>
                    <td>Epouvante-horreur, Thriller</td>
                    <td>Daniel Stamm</td>
                    <td>2,2/5</td>
                </tr>
                <tr>
                    <td><img src="./Image/Forrest-Gump.jpg" alt="Forrest-Gump img" /></td>
                    <td>Forrest Gump</td>
                    <td>05/10/1994</td>
                    <td>Comédie, Drame, Romance</td>
                    <td>Robert Zemeckis</td>
                    <td>4,6/5</td>
                </tr>
            </table>
    </section>
    <section>
        <p>Qu'est-ce que vous voulez faire ?</p>
        <a href="Ajouter.php"><button>Ajouter un film</button><br></a>
        <a href="Lire.php"><button>Lire un film</button></a><br>
        <a href="Modifier.php"><button>Modifier un film</button><br></a>
        <a href="Supprimer.php"><button>Supprimer un film</button><br></a>
    </section>
    <footer>
        <p>2024-2025</p>
    </footer>
</body>

</html>