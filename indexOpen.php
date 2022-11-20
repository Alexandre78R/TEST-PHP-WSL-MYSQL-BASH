<?php
    echo "test";

    $userAge = 17; // La variable est créée et vaut 17
    $userAge = 23; // La variable est modifiée et vaut 23
    $userAge = 55; // La variable est modifiée et vaut 55
    $fullname = "Mathieu Nebra";
    $email = 'mathieu.nebra@exemple.com';

    // On peut reverser si ce n'est pas les même guillemets sinon utilisation du \ pour forcer
    $variable = "Mon \"nom\" est Mathieu";
    $variable = 'Je m\'appelle Mathieu';
    $variable = 'Mon "nom" est Mathieu';
    $variable = "Je m'appelle Mathieu";

    $userAge = 17;
    $price = 57.3;
    $isAuthor = true;
    $isAdministrator = false;
    $noValue = NULL;

    $fullname = "Mathieu Nebra";
    echo "Bonjour ";
    echo $fullname;
    echo " et bienvenue sur le site !";
    // OU
    // echo "Bonjour $fullname et bienvenue sur le site !"; || echo 'Bonjour $fullname et bienvenue sur le site !'; // ERREUR !
    // OU
    echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK

    $number = 2 + 4; // $number prend la valeur 6
    $number = 5 - 1; // $number prend la valeur 4
    $number = 3 * 5; // $number prend la valeur 15
    $number = 10 / 2; // $number prend la valeur 5

    // Allez on rajoute un peu de difficulté
    $number = 3 * 5 + 1; // $number prend la valeur 16
    $number = (1 + 2) * 2; // $number prend la valeur 6
    $number = 10;
    $result = ($number + 5) * $number; // $result prend la valeur 150

    // Modulo calcul si il y a durestant dans la division 
    $number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
    $number = 10 % 3; // $number prend la valeur 1 car il reste 1

    $isEnabled = true; // La condition d'accès

    // Condition Methode 1 (Comme Javascript)
    if ($isEnabled == true) {
        echo "Vous êtes autorisé(e) à accéder au site";
    }
    
    // Condition Methode 2 (Comme javascript)
    if ($isEnabled == true) {
        echo "Vous êtes autorisé(e) à accéder au site ";
    }
    else {
        echo "Accès refusé ";
    }

    // Condition 3 comme javascript
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

    $isAllowedToEnter = true;
    
    // Condition 4 comme javascript
    if ($isAllowedToEnter) {
        echo "Bienvenue petit nouveau. :o)";
    }
    else {
        echo "T'as pas le droit d'entrer !";
    }

    // Condition 5 comme Javascript
    if (($isEnabled && $isOwner) || $isAdmin) {
        echo 'Accès à la recette validé ✅';
    } else {
        echo 'Accès à la recette interdit ! ❌';
    }

    // Condition 6 
    if ($isAllowedToEnter):
        echo 'Autorisé'; 
    endif; 

    $grade = 10;

// on indique sur quelle variable on travaille
switch ($grade) 
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

// Conition 7 ternaire comme Javascript
$ternaire = ($isAllowedToEnter) ? true : false;


// Les tableaux
$user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];

echo $user1[0]; // "Mickaël Andrieu"
echo $user1[1]; // "email"
echo $user1[3]; // 34

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];
$alexnadre = ['Alexandre Renard', 'alexandre.renard@exemple.com', 'P4ssw0rD', 23];
$users = [$mickael, $mathieu, $laurene, $alexnadre];

echo $users[1][1]; // "mathieu.nebra@exemple.com"

// Boucle While version 1 
$lines = 1;

// retour a ligne /n pour php coter serveur (terminal) et < br/> comme pour html du coup coter client (site) 
while ($lines <= 100) {
    echo 'On ajoute +1 :'. $lines . "\n";
    // incrémentation addition +1 chaque tour de boucle 
    $lines++;
}

$lines = 4; // nombre d'utilisateurs dans le tableau
$counter = 0;

while ($counter < $lines) {
    echo "counter --> " . $counter . "lines -->" . $lines . "Echo de base---> " . $users[$counter][0] . ' ' . $users[$counter][1] . "\n";
    $counter++; // Ne surtout pas oublier la condition de sortie !
}

// Boucle For
for ($lines = 0; $lines <= 3; $lines++) {
    echo $users[$lines][0] . "\n";
    echo $users[$lines][0] . ' ' . $users[$lines][1] . "\n";
}

$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

for ($lines = 0; $lines <= 1; $lines++):
    echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'. "\n";
endfor;

// Début --> Tableau les défférences 
// -----------------------------------------------------

// Construisez un tableau numéroté
// Pour créer un tableau numéroté en PHP, on liste ses valeurs entre crochets[]  .

// Cet exemple vous montre comment créer l'array $recipes :

// Tableau comme javascript
$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

// La fonction array permet aussi de créer un array
$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');

// --> Tableau numéroté
// Vous pouvez aussi créer manuellement le tableau, case par case 
$recipes[0] = 'Cassoulet';
$recipes[1] = 'Couscous';
$recipes[2] = 'Escalope Milanaise';

// Si vous ne voulez pas avoir à écrire vous-même le numéro de la case que vous créez,
// vous pouvez laisser PHP le sélectionner automatiquement en laissant les crochets vides :
// On créer un tableau sur plusieur lignes
$recipes[] = 'Cassoulet'; // Créera $recipes[0]
$recipes[] = 'Couscous'; // Créera $recipes[1]
$recipes[] = 'Escalope Milanaise'; // Créera $recipes[2]

echo $recipes[2] // ça affiche Escalope Milanaise

// --> Tableau associatif

$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];

// OU 

$recipe['title'] = 'Cassoulet';
$recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
$recipe['author'] = 'john.doe@exemple.com';
$recipe['enable'] = true;

// result Tab Associatif -->
echo $recipe['title'];

// Défintion des deux tableau différent 
// Les tableaux numérotés permettent de stocker une série d'éléments du même type,
// comme des prénoms. Chaque élément du tableau contiendra alors un prénom.
// Les tableaux associatifs permettent de découper une donnée en plusieurs sous-éléments. (comme Javascript)
// Par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville…  (Note de plus de moi en gros comme un JSON)

// -----------------------------------------------------
// Fin --> Tableau les défférences 

// Début exemple avec les tableaux avec différent boucle
// -----------------------------------------------------

// Tableau numérotés  boucle FOR
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
    ['Couscous2','[...]','mickael.andrieu@exemple.com',false,],
    ['Couscous3','[...]','mickael.andrieu@exemple.com',false,],
];

for ($lines = 0; $lines <= 3; $lines++) {
    echo $recipes[$lines][0] . "\n";
}

// Tableau numérotés  boucle foreach
// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo 'Nom --->' . $recipe[0] . " Email --->" . $recipe[2] . "\n"; // Affichera Cassoulet, puis Couscous
}

// Tableau associatif  boucle foreach
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
];

foreach ($recipe as $value) {
    echo $value . "\n"; // renvoie chaque info dans les ligne 
}

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

foreach($recipes as $recipe) {
    PHP_EOL = Saut de ligne
    echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL; 
}
echo 'PHP_EOL ---> ' . PHP_EOL  . "test"

foreach($recipe as $property => $propertyValue)

// $property qui contiendra la clé de l'élément en cours d'analyse (« title », « author », etc.).

// $propertyValue qui contiendra la valeur de l'élément en cours (« Cassoulet », « laurene.castor@exemple.com », etc.).

$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach($recipe as $property => $propertyValue) {
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
}

// Voir rapidement il y a quoi dans une tableau :

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
];

// Cette commande a toutefois un défaut : elle ne renvoie pas de code HTML comme <br /> 
// pour les retours à la ligne. Pour bien les voir, il faut donc utiliser la balise HTML <pre>  
// qui nous permet d'avoir un affichage plus correct.

print_r($recipes);

// -----:------------------------------------------------
// Fin exemple avec les tableaux avec différent boucle

// À chaque tour de boucle, on disposera non pas d'une, mais de deux variables :

// $property qui contiendra la clé de l'élément en cours d'analyse (« title », « author », etc.).

// $propertyValue qui contiendra la valeur de l'élément en cours (« Cassoulet », « laurene.castor@exemple.com », etc..)

// 3 type de recherche dans un tableau
// array_key_exists pour vérifier si une clé existe dans le tableau.

// in_array pour vérifier si une valeur existe dans le tableau.

// array_search pour récupérer la clé d'une valeur dans le tableau.

// 1) Vérifiez si une clé existe dans un tableau avec array_key_exists
array_key_exists('cle', $array); //cle Nom de la recherce dans le tableau recipe
// Envoie true ou false

$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe)) {
    echo 'La clé "title" se trouve dans la recette !';
} else {
    echo 'La clé "title" ne se trouve pasdans la recette !';
}

// On ne trouve pas c'est que la première valeur qu'il check
if (array_key_exists('laurene.castor@exemple.com', $recipe)) {
    echo 'La clé "laurene.castor@exemple.com" se trouve dans la recette !';
} else {
    echo 'La clé "laurene.castor@exemple.com" ne se trouve pas dans la recette !';
}

// 2) Vérifiez si une valeur existe dans un tableau avec in_array
// Envoie true ou false

$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

if (in_array('Mathieu Nebra', $users)) {
    echo 'Mathieu fait bien partie des utilisateurs enregistrés !';
} else {
    echo 'Mathieu ne fait pas partie des utilisateurs enregistrés !';
}

if (in_array('Arlette Chabot', $users)) {
    echo 'Arlette fait bien partie des utilisateurs enregistrés !';
} else {
    echo 'Arlette ne fait pas partie des utilisateurs enregistrés !';
}

// 3) Récupérez la clé d'une valeur dans un tableau avec array_search 
// array_search fonctionne comme in_array : il travaille sur les valeurs d'un tableau.

// Voici ce que renvoie la fonction :
// Si elle a trouvé la valeur, array_search renvoie la clé correspondante
// (dans le cas d'un tableau numéroté, la clé sera un numéro ; dans le cas d'un tableau associatif, la clé sera un nom).
// Si elle n'a pas trouvé la valeur, array_search renvoie false.

$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

$positionMathieu = array_search('Mathieu Nebra', $users);
echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL;

$positionLaurène = array_search('Laurène Castor', $users);
echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL;

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];

foreach($recipes as $recipe) :
    if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true):
        echo $recipe['title'] . "" . $recipe['recipe'] . "" .  $recipe['author'] . "\n";
    endif;
endforeach;


 
?>
