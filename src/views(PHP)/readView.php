<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>

    <body class="bg-light">
    <header class="text-center my-4">
        <h1 class="text-primary">Affichage du film: </h1>
    </header>
    <main class="container">
    <table class = "table table-striped ">
            <tr>
                <th>ID</th>
                <th>title</th>
                <th>year</th>
                <th>type</th>
                <th>genre</th>
                <th>sypnosis</th>
                <th>director</th>
                <th>deleteAt</th>
                <th>createdAt</th>
                <th>updateAt</th>
            </tr>
            <?php
                if($film->getDeletedAt()==null){
                    $deletedDate="null";
                }
                else{
                    $deletedDate = $film->getDeletedAt()->format("Y-m-d H:m:s");
                }
                echo '<tr><td>'.$film->getId().'</td><td>'.$film->getTitle().'</td><td>'.$film->getYear().'</td><td>'.$film->getType().'</td><td>'.$film->getGenre().'</td><td>'.$film->getSynopsis().'</td><td>'.$film->getDirector().'</td><td>'.$deletedDate.'</td><td>'.$film->getCreatedAt()->format("Y:m:d H:m:s").'</td><td>'.$film->getUpdatedAt()->format("Y:m:d H:m:s").'</td></tr>';
            ?>
            </table>
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2023 Filmoteca. All rights reserved.</p>
    </footer>
</body>
</html>