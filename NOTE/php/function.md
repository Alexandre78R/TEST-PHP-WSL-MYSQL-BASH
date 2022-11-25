Les functions 
===

Static on stock dans la function 

Global pour dispatch par tous 

## Apelle d'une function dans par une variable :

- Exemple  :

```PHP
    function teacher ()
    {
        echo "I am a Teacher";
    };
    
    function student ($name)
    {
        echo "I am a student and my name is $name";
    };
    $func_teacher = 'teacher';
    $func_student = 'student';
    $func_teacher();
    $func_student("ALex");
```

```PHP
I am a TeacherI am a student and my name is ALex //result
```
## Prédifinir une varaible dans une function par défault 

```PHP
    function say_my_name ($name = "Toto")
    {
        echo "My name is $name !";
    };
```

## Function annoyme : https://www.php.net/manual/en/functions.anonymous.php

```PHP 
$example = function () {
    var_dump($message);
};
```

```PHP
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hello");
```

# Mettre la première lettre en Majuscule

Doc php : 
```PHP
  ucfirst()
```

Code perso : prise de tete : note 0/20

```PHP
    $func = function (string $str)
    {
        // Mettre en Majuscule
        $letter = strtoupper($str[0]);
        // On récupère le reste des lettre de 1 à max caractère
        $restLetter = substr($str, 1, strlen($str));
        // Et  on regroupe tous ...
        $finalStr = "$letter$restLetter";
        echo $finalStr;
    };
    $func("alex")
```

 - function keuy
```PHP
<?php
    $tab = [
        0 => "n°1",
        1 => "n°2",
    ];
    $key = 1;
    function array_key (array $tab, int $key)
    {
        global $tab, $key;
        var_dump($tab);
        echo $tab[$key];
    };
    array_key($tab, $key);
?>
```

# Function par défault PHP :

- Compter le nombre d'argument dans une function 

```PHP
func_num_args()
```
- Voir le nombre d'argument dans un tableau
- Variable $numArgs stock le  nombre d'argument dans une function
```PHP
func_get_arg($numArgs)
```

-  Affiche les informations d'une variable
-  Affiche les informations structurées d'une variable, y compris son type et sa valeur. Les tableaux et les objets sont explorés récursivement, avec des indentations, pour mettre en valeur leur structure.
```PHP
var_dump()
```

- Mettre en minuscule une chaine caractère :

```PHP
strtolower($str)
```

- Mettre en majuscule une chaine caractère :
```PHP
strtoupper() 
```

- Compter le nombre de lettre dans une chaine à caractère 

```PHP
strlen($minyStr)
```



### Liste Function utile avec les tableaux :

- count

- Compte le nombre d’éléments dans un tableau.

in_array

- Teste si une valeur est présente dans un tableau.

array_search

- Recherche une valeur dans un tableau.

array_replace

- Remplace des valeurs dans un tableau.

[a|k][r]sort

- Trie un tableau (plusieurs variantes possibles).

explode

- Découpe une chaîne selon un séparateur et stocke les éléments dans un tableau.

implode

- Regroupe les éléments d’un tableau dans une chaîne à l’aide d’un séparateur.

max

- Retourne la plus grande valeur stockée dans un tableau.

min

- Retourne la plus petite valeur stockée dans un tableau.

str_split

- Découpe une chaîne en morceaux de longueur fixe et stocke les éléments dans un tableau.

array_column

- Retourne les valeurs d’une colonne d’un tableau multidimensionnel.