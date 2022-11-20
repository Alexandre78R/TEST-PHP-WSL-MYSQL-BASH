Les Tableaux
===

### Création d'un tableau :

- Construisez un tableau numéroté :

```PHP
$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

// La fonction array permet aussi de créer un array
$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');

// Vous pouvez aussi créer manuellement le tableau, case par case :
$recipes[0] = 'Cassoulet';
$recipes[1] = 'Couscous';
$recipes[2] = 'Escalope Milanaise';

// Si vous ne voulez pas avoir à écrire vous-même le numéro de la case que vous créez, vous pouvez laisser PHP le sélectionner automatiquement en laissant les crochets vides :
$recipes[] = 'Cassoulet'; // Créera $recipes[0]
$recipes[] = 'Couscous'; // Créera $recipes[1]
$recipes[] = 'Escalope Milanaise'; // Créera $recipes[2]

echo $recipes[1]; // Cela affichera : Couscous

```

- Construisez un tableau associatif :

Pour mieux décrire notre recette sous forme de tableau, nous pouvons stocker une recette sous la forme d'un tableau associatif, dans lequel chaque clé est une propriété de la recette :

Note importante : il n'y a ici qu'une seule instruction (un seul point-virgule). J'aurais pu tout mettre sur la même ligne, mais rien ne m'empêche de séparer ça sur plusieurs lignes pour que ce soit plus facile à lire.

```PHP
// Une bien meilleure façon de stocker une recette !
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];
```

- Il est aussi possible de créer le tableau case par case, comme ceci :

```PHP
$recipe['title'] = 'Cassoulet';
$recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
$recipe['author'] = 'john.doe@exemple.com';
$recipe['enable'] = true;
```
- Affichage résultat du titre
```PHP
echo $recipe['title'];
```

## Conclusion : 
- Les tableaux numérotés permettent de stocker une série d'éléments du même type, comme des prénoms. Chaque élément du tableau contiendra alors un prénom.

- Les tableaux associatifs permettent de découper une donnée en plusieurs sous-éléments. Par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville…

# Parcourez un tableau

- La boucle  for  .

- La boucle  foreach  .

- La fonction print_r (utilisée principalement pour le déboggage).


## Avec la boucle for
```PHP
/**
 * Déclaration du tableau des recettes
 * Chaque élément du tableau est un tableau numéroté (une recette)
 */
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

for ($lines = 0; $lines <= 1; $lines++) {
    echo $recipes[$lines][0];
} 
```

## Avec la boucle foreach
```PHP
// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo $recipe[0]; // Affichera Cassoulet, puis Couscous
}

```
```PHP
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
    echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL; 
}

// Result :
// Cassoulet contribué(e) par : mickael.andrieu@exemple.com
// Couscous contribué(e) par : mickael.andrieu@exemple.com
// Escalope milanaise contribué(e) par : mathieu.nebra@exemple.com
// Salade Romaine contribué(e) par : laurene.castor@exemple.com
```

```PHP
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach($recipe as $property => $propertyValue)
{
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
}
// Result
//  php exemple.php 
// [title] vaut Salade Romaine
// [recipe] vaut Etape 1 : Lavez la salade ; Etape 2 : euh ...
// [author] vaut laurene.castor@exemple.com
```

# Recher dans un tableau 

- array_key_exists pour vérifier si une clé existe dans le tableau.

- in_array pour vérifier si une valeur existe dans le tableau.

- array_search pour récupérer la clé d'une valeur dans le tableau.

### Vérifiez si une clé existe dans un tableau avec array_key_exists

Voici notre problème : on a un array, mais on ne sait pas si la clé qu'on cherche s'y trouve.
Pour vérifier ça, on va utiliser la fonction array_key_exists qui va parcourir le tableau pour nous, et nous dire s'il contient cette clé.

### On doit lui donner :

- Le nom de la clé à rechercher.

- Puis le nom du tableau dans lequel on fait la recherche :

```PHP
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe))
{
    echo 'La clé "title" se trouve dans la recette !';
}

if (array_key_exists('commentaires', $recipe))
{
    echo 'La clé "commentaires" se trouve dans la recette !';
}
// result
// La clé "title" se trouve dans la recette !
```

La fonction renvoie un booléen : 

- true si la valeur se trouve dans le tableau ;

- false si elle ne s'y trouve pas.


# Vérifiez si une valeur existe dans un tableau avec in_array 

### Le principe est le même que array_key_exists mais cette fois on recherche dans les valeurs. 

in_array renvoie : 

- true si la valeur se trouve dans le tableau ;

- false si elle ne s'y trouve pas.

```PHP
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

if (in_array('Mathieu Nebra', $users))
{
    echo 'Mathieu fait bien partie des utilisateurs enregistrés !';
}

if (in_array('Arlette Chabot', $users))
{
    echo 'Arlette fait bien partie des utilisateurs enregistrés !';
}
```
# Récupérez la clé d'une valeur dans un tableau avec array_search
### array_search fonctionne comme in_array : il travaille sur les valeurs d'un tableau.

Voici ce que renvoie la fonction :

- Si elle a trouvé la valeur, array_search renvoie la clé correspondante (dans le cas d'un tableau numéroté, la clé sera un numéro ; dans le cas d'un tableau associatif, la clé sera un nom).

- Si elle n'a pas trouvé la valeur, array_search renvoie false  .

- On reprend le tableau numéroté :

```PHP
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

$positionMathieu = array_search('Mathieu Nebra', $users);
echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL;

$positionLaurène = array_search('Laurène Castor', $users);
echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL;
// "Mathieu" se trouve en position 0
// "Laurène" se trouve en position 2
```

# Affichage d'un Tableau avec print_r

Ex : 

```PHP
$tab =  [1, 2, 3, 4, 5];
print_r($tab);
```

Mais si vous n'avez pas besoin d'une mise en forme spéciale et que vous voulez juste savoir ce que contient le tableau, vous pouvez faire appel à la fonction print_r  . C'est une sorte de echo  spécialisé dans les tableaux.