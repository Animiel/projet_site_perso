<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title><?= $title ?></title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="view/portfolio.php">Accueil</a></li>
            <li><a href="view/grotte.php">La grotte</a></li>
            <li><a href="view/contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
        <?= $contenu ?>
    </main>
<script>
    function hide() {
        var x = document.getElementsByClassName("answer");
        x.style.display = "none";
    }

    window.onload = hide();
</script>
</body>
</html>