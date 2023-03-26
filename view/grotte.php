<?php
ob_start();
?>

<h1>Vous voici...dans mon antre !</h1>

<p>N'hésitez pas à explorer les différents coin de la grotte, mais ATTENTION, les coins sombres sont privés. J'espère que vous vous y plairez.</p>

<div class="cave">
    <div class="coin">
        <a href="view/grotte.php">?</a>
    </div>

    <div class="coin">
        <a href="view/grotte.php">?</a>
    </div>

    <div class="coin">
        <a href="view/grotte.php">?</a>
    </div>

    <div class="coin">
        <a href="view/grotte.php">?</a>
    </div>
</div>

<?php
$title = "La forêt des présentations | La grotte";
$contenu = ob_get_clean();
require "template.php";
?>