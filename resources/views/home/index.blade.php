<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de smileys</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Color Emoji', sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .pagination {
            margin-top: 20px;
            text-align: center;
        }
        footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Page de smileys</h1>

    <?php
    // Nombre de caractères par page
    $caracteres_par_page = 256;

    // Code de départ pour les smileys UTF-8
    $code_de_depart = 128512;

    // Afficher les caractères UTF-8
    for ($i = 0; $i < $caracteres_par_page; $i++) {
        // Afficher chaque caractère avec son code HTML
        $code = $code_de_depart + $i;
        echo '&#' . $code . '; ';

        // Insérer un saut de ligne après chaque 16 caractères pour former une grille
        if (($i + 1) % 16 == 0) {
            echo '<br>';
        }
    }
    ?>

    <!-- Pagination -->
    <div class="pagination">
        <!-- Laissez cette partie à Amine -->
    </div>

    <!-- Mentions légales -->
    <footer>
        <p>Mentions légales : Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </footer>
</div>

</body>
</html>
