<?php
ob_start();
$_SESSION['default_page'] = 1;
?>

    <section>
        <div class="set">
            <div><img src="img/leaf1.png"></div>
            <div><img src="img/leaf2.png"></div>
            <div><img src="img/leaf2.png"></div>
            <div><img src="img/leaf1.png"></div>
            <div><img src="img/leaf2.png"></div>
            <div><img src="img/leaf1.png"></div>
            <div><img src="img/leaf1.png"></div>
            <div><img src="img/leaf2.png"></div>
        </div>
    </section>

    <h1>Bienvenue chez moi !</h1>

    <p>Ici vous trouverez toute sorte d'infos sur moi, Florian, ou Flo, FloL, Floflo, et bien d'autres surnoms encore.</p>

    <h2><strong>Qui es-tu ?</strong></h2>

    <p>Moi ? Personne en particulier. Une simple créature vivant dans un coin reculé de la planète Terre...</p>

    <label id="display_1" for="rep_1"><p>Sérieusement ?</p></label>

    <p id="rep_1" class="answer">Bon ça va, ça va...je suis un jeune homme introverti et calme, certes un peu colérique et trèèèès obstiné mais la situation est sous contrôle (je l'espère en tout cas) ! J'adore faire des blagues et je suis plutôt altruiste / empathique aussi. Et un grand romantique dans l'âme... ;p<br>
    Est-ce que cette réponse vous convient mieux ?</p>


    <h2><strong>Et d'où viens-tu ?</strong></h2>

    <p>Je suis venu tout droit de l'Enfer, pour répandre terreur et désolation partout où je vais !</p>

    <label id="display_2" for="rep_2"><p>...</p></label>

    <div id="rep_2" class="answer">
        <p>...</p>
        <p>Bon...pas de scénario imaginatif, j'ai compris...</p>
        <p>Je suis actuellement en France, dans la meilleure région : l'Alsace ! Le lieu exact personne ne le sait, sauf ma carte d'identité, mes proches, l'Etat, les personnes qui m'espionnent, ... Ca fait un paquet de monde quand on y pense. Autant ne pas en rajouter des millions en plus. :D</p>
    </div>
    <h2><strong>Pourquoi es-tu bizarre ?</strong></h2>

    <p>Bizarre le lézard ! Qu'appelez vous "bizarre" ? Ne sommes nous pas tous bizarre aux yeux d'autres. Parfois par choix, parfois par tradition, et parfois par maladie.</p>
    <p>Dans mon cas c'est par choix, parce que je trouve que la différence est nécessaire dans la vie, par conséquent je ne veux pas ressembler aux autres. :D</p>

    <h2><strong>Sinon, c'est quoi ton parcours ?</strong></h2>

    <ul>
        <li><strong>Collège :</strong>
            <ul>
                <li>Option LCR : Langue et Culture Régionale, dont participation à un concours de slam en alsacien.</li>
                <li>Obtention de la <a href="https://pedagogie.ac-strasbourg.fr/langues/examens-certifications-concours/certifications-en-langues-2nd-degre/dsd1-certification-en-allemand-de-la-kmk/" target="blank">KMK</a> (2014) : diplôme de niveau de langue allemand (obtenu avec le niveau B1).</li>
                <li>Obtention du brevet (2014) : sans mention.</li>
            </ul>
        </li>
        <li><strong>Lycée :</strong>
            <ul>
                <li>Anciennement fillière scientifique en spécialisation math.</li>
                <li>Matières optionnelles :
                    <ul>
                        <li>Art plastique</li>
                        <li>Option européenne : physique-chimie en allemand.</li>
                    </ul>
                <li>Obtention du Baccalauréat (2017) : sans mention classique mais avec mention européenne (donc réussite de l'épreuve européenne).</li>
            </ul>
        </li>
        <li><strong>Etudes supérieures :</strong>
            <ul>
                <li>Faculté de math et informatique (2018) : seulement 1ère année et aucune validation de diplôme.</li>
            </ul>
        </li>
        <li><strong>Expériences professionnelles :</strong>
            <ul>
                <li>Quelques stages :
                    <ul>
                        <li>Soigneur animalier</li>
                        <li>Vacher</li>
                        <li>Paysagiste</li>
                    </ul>
                </li>
                <li>Employé libre service en supermarché (~ 9 mois) : plusieurs postes occupés dont caissier, boulangerie, rayons frais (charcuterie, produits laititers et fruits-légumes) et boissons.</li>
                <li>Agent d'exploitation de la route (18 mois) : travail sur terrain, entretien de la route (fauchage des bas-côtés, mise en place de la signalisation, vérification de la conformité de la signalisation, vérification de l'état des routes, etc.).</li>
            </ul>
        </li>
        <li><strong>Bénévolat :</strong>
            <ul>
                <li>SPA : promenade et "suivi" des chiens.</li>
                <li>Animateur en périscolaire et colonie de vacances : animateur pour enfant de 5 à 15 ans approximativement (sans <a href="https://www.jeunes.gouv.fr/le-brevet-d-aptitude-aux-fonctions-d-animateur-bafa-253" target="blank">BAFA</a> ou autres qualifications).</li>
            </ul>
        </li>
    </ul>

    <p>Et actuellement en formation de développeur web et en train de faire ce site. :D</p>

    <h2><strong>Et t'as des hobbies ou t'es ennuyant ?</strong></h2>

    <p>Mais !! Je ne vous permet pas ! Bon ok, je suis peut-être un peu ennuyant, mais je ne vous permet tout de même pas !</p>
    <p><a href="view/grotte.php">Quoi qu'il en soit, suivez moi, je vous montre ma grotte secrète.</a></p>

    <h2><strong>Et comment on peut te contacter (si quelqu'un voudrait éventuellement le faire) ?</strong></h2>

    <p>...</p>
    <p>Vous me faites mal...ça brise mon petit coeur de pierre...mais soit ! Heureusement que c'était votre dernière question ! Pour me contacter, <a href="view/contact.php">c'est par là !</a></p>
    
<?php
$title = "La forêt des présentations";
$contenu = ob_get_clean();
require "template.php";
?>