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

        var target1 = document.getElementById("display_1");
        var target2 = document.getElementById("display_2");
        var x = document.getElementById("rep_1");
        var y = document.getElementById("rep_2");
        x.style.display = "none";
        y.style.display = "none";

        document.getElementById("display_1").onclick = function() {
            //on pourrait faire un if (x.display == "none") alors "inline" else "none" pour faire une réponse déroulante et non à sens unique
            // x.style.display = "none";
            x.style.display = "inline";
        }

        document.getElementById("display_2").onclick = function() {
            // y.style.display = "none";
            y.style.display = "inline";
        }
        return;
    }

    window.onload = hide();
    
</script>
</body>
</html>