Les variables
===

- Création variable 
```php
$variable = 2;
echo $variable;  // result 2
```
  
- Modification d'une variable

```php
$variable = 2;
$variable = 5; 
echo $5; //result 5
```

## Dataset Preparation
| Variable | Download | Download |
| ---     | ---   | ---   |
| $variable | "String" | string |
| $variable | 1 | int | 
| $variable| 1.1 | float |
| $variable| false/true | booléen -  bool|
| $variable| NULL | NULL |


- Appliquer une variable dans un string

```php
$fullname = "Alexandre";
echo "Bonjour $fullname et bienvenue sur le site !";
// Bonjour Alexandre et bienvenue sur le site !

// ---------------------------------------------------------------------

$fullname = 'Alexandre';
echo 'Bonjour $fullname et bienvenue sur le site !'; 
// ERREUR !

// ---------------------------------------------------------------------

$fullname = 'Alexandre';
echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK
// Bonjour Alexandre et bienvenue sur le site !

// 
```

## Les opérations de base : 
| Symbole | Signification |
| ---     | ---   |
| +     | Addition   |
| -     | Soustraction   |
| *     | Multiplication   |
| /     | Division   |
| %     | Modulo   |

### Exemple :

```PHP 
$number = 2 + 4; // $number prend la valeur 6
$number = 5 - 1; // $number prend la valeur 4
$number = 3 * 5; // $number prend la valeur 15
$number = 10 / 2; // $number prend la valeur 5

// Allez on rajoute un peu de difficulté
$number = 3 * 5 + 1; // $number prend la valeur 16
$number = (1 + 2) * 2; // $number prend la valeur 6

// -----------------------------------------------------------------------------------------

$number = 10;
$result = ($number + 5) * $number; // $result prend la valeur 150

// ------------------------------------------------------------------------------------------

$number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
$number = 10 % 3; // $number prend la valeur 1 car il reste 1
```

Je passe sous silence les opérations plus complexes telles que :

- la racine carrée ;

- l'exponentielle ;

- la factorielle ;


Toutes ces opérations peuvent être réalisées en PHP mais il faudra passer par ce qu'on appelle des fonctions, une notion que l'on découvrira plus tard. Les opérations basiques que l'on vient de voir sont amplement suffisantes pour la programmation PHP de tous les jours.

### Détruire une variable 

```PHP
$myvar = "Bonjour !";
unset($myvar);
```

### Utiliser une Constante

```PHP 
define('CONSTANTE', 'Je suis une constante');
```

