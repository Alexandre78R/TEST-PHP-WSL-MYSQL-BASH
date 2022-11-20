Les Conditions
===

## Retenez les symboles à connaître
| Symbole | Signification |
| ---     | ---   |
| == | Est égal à |
| > | Est supérieur à |
| < | Est inférieur à |
| >= | Est supérieur ou égal à |
| <= | Est inférieur ou égal à |
| != | Est différent de |

## Utilisez la structure 

```PHP
$isEnabled = true; // La condition d'accès

if ($isEnabled == true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
```

```PHP
$isEnabled = true;

if ($isEnabled == true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
else {
    echo "Accès refusé ❌ ";
}
```

```PHP
$isAllowedToEnter = "Oui";

// SI on a l'autorisation d'entrer
if ($isAllowedToEnter == "Oui") {
    // instructions à exécuter quand on est autorisé à entrer
} // SINON SI on n'a pas l'autorisation d'entrer
elseif ($isAllowedToEnter == "Non") {
    // instructions à exécuter quand on n'est pas autorisé à entrer
} // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
else {
    echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
}
```

```PHP
$isAllowedToEnter = true;

if ($isAllowedToEnter) {
    echo "Bienvenue petit nouveau. :o)";
}
else {
    V
}
```

```PHP
$isAllowedToEnter = true;

// Si pas autorisé
if (! $isAllowedToEnter) {
  echo "T'as pas le droit d'entrer !";
}
```

## Posez des conditions multiples
| Mot-clé | Signification | Symbole équivalent |
| ---     | ---   | ---   |
| AND     | Et   | & |
| OR | Ou | ll  |


```PHP
$isEnabled = true;
$isOwner = false;

if ($isEnabled && $isOwner) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}
```

```PHP
$isEnabled = true;
$isOwner = false;
$isAdmin = true;

if (($isEnabled && $isOwner) || $isAdmin) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}
```

```PHP
<?php $chickenRecipesEnabled = true; ?>

<?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->

<h1>Liste des recettes à base de poulet</h1>

<?php endif; ?> <!-- Ni le ";" après le endif -->
```

### Utilisez la condition switch pour optimiser votre code
# NON
```PHP
$grade = 16;

if ($grade == 0) {
    echo "Tu es vraiment un gros nul !!!";
}

elseif ($grade == 5) {
    echo "Tu es très mauvais";
}

elseif ($grade == 7) {
    echo "Tu es mauvais";
}

elseif ($grade == 10) {
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
}

elseif ($grade == 12) {
    echo "Tu es assez bon";
}

elseif ($grade == 16) {
    echo "Tu te débrouilles très bien !";
}

elseif ($grade == 20) {
    echo "Excellent travail, c'est parfait !";
}

else {
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
```
# Oui
```PHP
$grade = 10;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

```

# Découvrez les ternaires : des conditions condensées

```PHP
$userAge = 24;

$isAdult = ($userAge >= 18) ? true : false;

// Ou mieux, dans ce cas précis
$isAdult = ($userAge >= 18);
```