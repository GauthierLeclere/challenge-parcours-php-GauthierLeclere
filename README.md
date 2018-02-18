# Parcours du combattant PHP

*Bien le bonjour !*

Paraîtrait que vous vous y connaissez un peu en PHP ?

Ah, bien… Vous allez pouvoir m'être utile.
Je suis une vieille dame maintenant, je n'y vois plus très clair moi-même, j'ai du mal à coder.
Mais surveillez votre langage, j'avais écrit du code que vous n'étiez même pas encore né !

---

Bref.

J'ai quelques petits soucis avec mes fonctions, pourtant je dispose
de très jolis tests pour chacunes d'elles, mais pas moyen de programmer
correctement aujourd'hui.

Dans chaque fichier PHP, une fonction à écrire.
C'est rapide, il n'y a pas beaucoup de fichiers…
Vous pouvez faire ça pour moi ? Vous êtes un ange.

...

Bon, bah allez, on ne va pas y passer la journée !

Les fonctions, c'est dans le dossier `exos`. Ouvrez donc le fichier `exos/exo1.php` dans votre `localhost`, et essayer de passer les tests !

---

PS : Venez pas tout me casser, ne modifiez uniquement le code des fonctions, pas touche au reste, sinon vous allez recevoir un coup de louche sur le bonnet !  
Au boulot !

![](https://media.giphy.com/media/50rJushu3URtS/giphy.gif)


## Avant de commencer

* Les exercices vont par couple : 1-2, 3-4, 5-6. Le dernier, l'exo 6, est un peu balèze.

* Si vous bloquez sur les versions II (exo2, exo4, exo6), n'hésitez pas à passez à l'exercice suivant. Mamie boudera certainement, m'enfin.

* La fonction de mamie `displayExo` affiche du HTML avec des tests sur votre fonction. Si vous souhaitez tester tranquillement votre fonction avant, n'hésitez pas à utiliser `die` pour arrêter PHP :

```php
function calculPlage() {
    return 10;
}

// Je teste ma fonction
echo calculPlage();

// J'arrête PHP, pour ne pas que ça m'affiche le HTML
die();


/*
 * Tests
 * Pas touche !
 */
displayExo(1, (
    calculPlage(10, 10, 10) === 40
    && calculPlage(1, 2, 3) === 9
    && calculPlage(27.90, 59.00, 6.50) === 99.90
));
```

---

Good Luck & Have Fun !
