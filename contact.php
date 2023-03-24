<?php
ob_start();
?>

<h1>Pour me contacter !</h1>

<p>Je ne fonctionne que par pigeon voyageur (eh oui, dans une grotte perdue la technologie n'existe pas), donc la réception et la réponse risque d'être un peu longue. La patience est une vertue rare de nos jours.</p>

<?php
$title = "La forêt des présentations | Contact";
$contenu = ob_get_clean();
require "template.php";
?>