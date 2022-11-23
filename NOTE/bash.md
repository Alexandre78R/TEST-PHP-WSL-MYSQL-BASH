## Les Commandes Bash :
- Affiche le nom de répertoire de travail courant.
  ```
  pwd
  ```
- Explorez le contenu d’un dossier avec « ls »
  ```
  ls
  ```
  ## Liste Param command ls : 
| Command | ARG | Commentaire |
| ---     | ---   | --- |
| ls | nomDuRepertoire |  Consulter son contenu
| ls | .. |  Afficher le contenu du répertoire parent
| ls | -la | va afficher le contenu du répertoire
| ls | -l | va afficher le contenu du répertoire détailler

- Changer de répertoire
  ```
  cd
  ```
- Création répertoire “make directory”
  ```
  mkdir
  ```
- Création fichier
  ```
  cd
  ```
- Déplacer un fichier "move"
  ```
  mv
  ```
### Liste exemple commande MV : 
| Command | ARG | Commentaire |
| ---     | ---   | --- |
| mv | fichier.txt dossier/ | Pour déplacer le fichier “fichier.txt” à l’intérieur du répertoire “dossier”, nous écrirons
|  mv | * dossier | Je demande au terminal de déplacer (mv) tout ce qui correspond à * (c’est-à-dire, absolument tout !) dans le répertoire “dossier”.

- Copiez du contenu avec cp
  ```
  cp elementACopier destination
  ```
  ```
  Par exemple pour copier le fichier “fichier.txt” dans le répertoire “dossier”
  ```
  ```
  ----------------------------------------------
  ```
  ```
  cp fichier.txt fichier2.txt
  ```
  ```
  Second exemple : pour copier le fichier “fichier.txt” dans le même répertoire, mais avec un nouveau nom, ici “fichier2.txt”.
  ```
  ```
  ----------------------------------------------
  ```
  ```
  cp -r dossier/ dossierCopie 
  ```
  ```
  Dernier exemple, la copie d’un répertoire : 
  ```

- Supprimez des fichiers et des répertoires avec rm
  ```
  rm elementASupprimer
  ```

- Essayons maintenant de supprimer un répertoire. Ici, je tente de supprimer le répertoire “dossierCopie”.
  ```
  rm -r dossierCopie/
  ```

- Affichez le manuel d’une commande avec man (manuel)
  ```
  man nomdelacommande
  ```
 ```
 Comme vous pouvez le constater, l’écran entier a été remplacé par l’aide de la commande.

  Pour naviguer dans cette aide, vous pouvez utiliser flèche haut et flèche bas. Et pour sortir de cette aide, vous pouvez taper sur la touche q (q pour pour "quitter").
  ```

- Lien Symbolique 

```
ln -s <nom du fichier ou répertoire de destination > <nom du lien symbolique> 
```

- Utilisez cat, less et more pour connaître le contenu d’un fichier

Ce qui suit n’est pas réellement une commande mais une “redirection”.

Il en existe plusieurs types, mais nous ne verrons ici que la plus commune : “>”.

Une redirection consiste à prendre la “sortie” d’une commande (par exemple pour “ls”, la sortie est tout simplement : afficher la liste des répertoires à l’écran) et à la rediriger vers autre chose, ici vers un fichier.

L’intérêt est notamment de pouvoir garder une trace des commandes que l’on a pu faire, en enregistrant leur résultat dans un fichier pour s’en resservir plus tard.

- Voici un exemple simple pour mieux comprendre :
```
ls -l > liste.txt
cat liste.txt

```
- Appréhendez grep chercher - Un argument dans le nom des fichier ou doccument
  
  exemple chercher tous les fichier en .txt 
```
grep .txt  *

```

Ce qui s’est passé, c’est que grep a cherché la chaîne “txt” dans tous les éléments du répertoire courant un par un (grâce à * que nous avons vu précédemment et qui permet de cibler l’ensemble des fichiers).

Comme grep fait ses recherches dans des fichiers, lorsqu’il rencontre un élément qui est un répertoire, il affiche un message pour préciser que cet élément est un répertoire et qu'il ne peut donc pas vérifier si la chaîne se trouve bien à l'intérieur.

Lorsque grep rencontre des fichiers, il les vérifie et soit il reste silencieux quand il n'y a rien à l'intérieur qui corresponde à la recherche (par exemple, le fichier "lorem.txt" ne contient pas, à l'intérieur, la chaîne "txt") soit il affiche le contenu qui correspond (par exemple “liste.txt” contient trois lignes avec “txt” dedans, et ces lignes sont bien affichées).

 # Découvrez quelques raccourcis utiles
Il peut parfois être un peu fastidieux de retaper à la main toutes ces commandes. Mais heureusement pour vous, il existe un certain nombre de « raccourcis » pour éviter de le faire :

la flèche haut et la flèche bas permettent de naviguer dans l'historique du terminal et de relancer des commandes déjà tapées précédemment ;

tabpermet de faire de l'autocomplétion, c’est-à-dire compléter automatiquement une commande ou un chemin si on a commencé à en taper le début. Si plusieurs options sont disponibles, taper une deuxième fois sur cette touche affichera la liste des options possibles ;

ctrl + r: cette combinaison permet de faire une recherche dans l'historique des commandes. Faites d’abord ctrl+r pour passer en mode “recherche”, puis tapez une partie de la commande que vous voulez rejouer. Lorsque votre recherche a porté ses fruits, vous n’avez plus qu’à valider en appuyant sur Entrée;

ctrl + aet ctrl + e : ces deux combinaison permettent respectivement d'aller automatiquement au tout début ou à la toute fin de la ligne de commande que vous êtes en train de taper, ce qui peut être pratique lorsque vous êtes en train d'écrire une commande particulièrement longue.

# Conclsuion : 

### Liste Command
- pwd : permet d’afficher le répertoire courant ;

- ls : permet d’afficher le contenu d’un répertoire ;

- ls -a : l’option -a affiche également les fichiers et dossiers cachés, 

- ls -l : l’option -l modifie l’affichage pour rajouter de nombreuses informations ;

- cd dossier : permet de se déplacer à l’intérieur d’un répertoire ;

- mkdir dossier : permet de créer un dossier ;

- touch nomFichier : permet de créer un fichier ;

- mv source destination : permet de déplacer des éléments ;

- * : est un caractère qui peut être utilisé comme substitut pour n’importe quel caractère dans une recherche ; 

- cp source destination : permet de copier des éléments ;

- cp -r : l’option -r permet de copier un répertoire ;

- rm fichiers : permet de supprimer des fichiers ;

- rm -r dossiers : l’option -r permet de supprimer des répertoires ;

- man commande : permet d’afficher le manuel d’une commande ;

- cat/less/more nomFichier : permet d’afficher le contenu d’un fichier ;

- '-->(Ne pas prendre en compte du début)    > : permet de rediriger le résultat d’une commande vers un fichier ;

- grep motif chemin : permet de faire des recherches dans des fichiers. 