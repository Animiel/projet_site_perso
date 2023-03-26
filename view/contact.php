<?php
ob_start();
?>

<h1>Pour me contacter !</h1>

<p>Je ne fonctionne que par pigeon voyageur (eh oui, dans une grotte perdue la technologie n'existe pas), donc la réception et la réponse risque d'être un peu longue. La patience est une vertue rare de nos jours.</p>

<p>
    <strong>E-mail :</strong> florian.leininger01@gmail.com
</p>
<div class="adresse">
    <strong>Adresse postale :</strong>
    <p>
        16A, rue des garçons<br>
        67340 WEITERSWILLER
    </p>
</div>
<p>
    <strong>Numéro de téléphone :</strong> 07.71.59.57.98
</p>

<?php
$title = "La forêt des présentations | Contact";
$contenu = ob_get_clean();
require "template.php";
?>