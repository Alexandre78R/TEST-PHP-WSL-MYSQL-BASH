Les Boucles
===

## Nous disposons de quatre boucles différentes en PHP :


- La boucle while (« tant que ») ;
- La boucle do… while (« faire… tant que ») ;
- La boucle for (« pour ») ;
- La boucle foreach (« pour chaque ») ;

### While : 
While  peut se traduire par « tant que ».
Les instructions qui sont répétées en boucle se trouvent entre les accolades {  et  }
« Je ne dois pas regarder les mouches voler quand j'apprends le 
PHP ».

La boucle while (« tant que » en français) est la boucle PHP la plus simple à appréhender.

La boucle while va nous permettre d’exécuter un certain bloc de code « tant qu’une » condition donnée est vérifiée.
```PHP
$lines = 1;

while ($lines <= 100) {
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $lines++; // $lines = $lines + 1
}
```

```PHP
$lines = 3; // nombre d'utilisateurs dans le tableau
$counter = 0;

while ($counter < $lines) {
    echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
    $counter++; // Ne surtout pas oublier la condition de sortie !
}

```

```PHP
$x = 0;

while($x <= 10){
    echo '$x contient la valeur ' .$x. '<br>';
    $x++;
}
```
### Do While : 
La boucle PHP do… while (« faire… tant que » en français) ressemble à priori à la boucle while mais va fonctionner « en sens inverse » par rapport à while.

En effet, la boucle PHP do… while va également nous permettre d’exécuter un code tant qu’une condition donnée est vraie, mais cette fois-ci le code dans la condition sera exécuté avant que la condition soit vérifiée.

Ainsi, même si une condition est fausse dès le départ, on effectuera toujours au moins un passage au sein d’une boucle do…while, ce qui n’est pas le cas avec une boucle while.*

```PHP
$x = 0;
$y = 20;

do{
    echo '$x contient la valeur ' .$x. '<br>';
    $x++;
}while($x <= 5);

do{
    echo '$y contient la valeur ' .$y. '<br>';
    $y++;
}while($y <= 5);
```
### FOR : 

La boucle PHP for (« pour » en français) est plus complexe à appréhender à priori que les boucles précédentes.

Cependant, cette boucle est très puissante et c’est celle qui sera majoritairement utilisée dans nos scripts PHP, faites donc l’effort de comprendre comment elle fonctionne.

Nous pouvons décomposer le fonctionnement d’une boucle for selon trois phases :

- Une phase d’initialisation ;
- Une phase de test ;
- Une phase d’incrémentation.

```PHP
$tab = ['ALEX'];
for ($lines = 0; $lines <= count($number); $lines++)
{
    echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
}
```

### Foreach
La boucle PHP foreach est un peu particulière puisqu’elle a été créée pour fonctionner avec des variables tableaux, qui sont des variables spéciales que nous n’avons pas encore étudiées.

Nous étudierons donc le fonctionnement de cette boucle en même temps que le type de valeur PHP array (« tableau » en français).

```PHP
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr vaut maintenant array(2, 4, 6, 8)
unset($value); // Détruit la référence sur le dernier élément
```

- Note

Appelle pointer à 0

boucle 2 entrer

vérifier le nombre d'entré

