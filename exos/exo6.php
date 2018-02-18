<?php
require_once '../inc/functions.php';

/*
 * Exo 6 : Mamie reçoit les p’tits enfants
 *
 * Bon, tant qu'on y est, ça serait bien aussi de calculer leur âge.
 * J'ai toujours eu la bonne mémoire des dates, je connais leur
 * date de naissance par coeur.
 *
 * Seulement, pour calculer leur âge à partir de leur date de naissance,
 * saperlipopette !
 *
 * Si je te rajoute un paramètre `birth` à l'URL, tu crois que tu pourrais
 * aussi me rajouter l'âge ? Je te passe la date sous la forme DD-MM-YYYY.
 * Par exemple :
 *   `exo5.php?name=Zelda&birth=18-05-2003`
 *
 * Ensuite, il te "suffirait" qu'à récupérer, découper, puis comparer…
 *   http://php.net/manual/fr/function.explode.php
 *   http://php.net/manual/fr/function.date.php
 *
 *
 * Allez, bon courage… (mouhahaha)
 */

function hello() {

  if(isset($_GET['name'], $_GET['birth']) && !empty($_GET['name']) && !empty($_GET['birth'])){
    // on récupère la date en paramètre pluis on la converti en format date
    $birth = date('d-m-Y', strtotime($_GET['birth']));
    $birth = new DateTime($birth);

    // date d'aujourd'hui au bon format
    $today = new DateTime(date('d-m-Y'));

    //calcul de l'age avcec seulement les années en sortie
    $age = date_diff($birth, $today)->format('%y') ;

    return 'Bonjour ' . $_GET['name'] . ', comment tu vas ? Tu as ' . $age. ' ans maintenant !' ;

  }

}




/*
 * Tests
 * Pas touche !
 */
displayExo(6, (
    hello() === 'Bonjour Elisa, comment tu vas ? Tu as 16 ans maintenant !'
));
