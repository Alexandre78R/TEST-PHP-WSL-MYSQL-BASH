MYSQL
===

- Accéder  au shell MySQL 
``` 
mysql -h localhost -u root -p 
```

- Comment crée une base de donnée MySQL 
``` 
CREATE DATABASE nom_base;
```

- Comment supprimer une base de donnée MySQL 
``` 
DROP DATABASE database name;
```

- Afficher les abses de données
``` 
SHOW DATABASES;
```

- Accéder à une base donnée
``` 
USE DATABASES;
```

- Accéder à une base donnée
``` 
USE DATABASES;
```

- Creation d'une table 
```
CREATE TABLE nom_table (champs);
```

- Pour afficher la structure d’une table :
```
DESCRIBE nom_table;
```

- Pour supprimer une table.
```
drop table [tablename];
```

- Afficher toutes les données d’une table.
```
SELECT * FROM [tablename];
```

- Renvoie les colonnes et les informations sur des colonnes relatives à une table.
```
SHOW COLUMNS FROM  [tablename];
```
- Déterminez quelle base de données est utilisée:
```
select database();
```
- Pour lister tous les index d’une table:
```
show index from [table]; 
```

- Créer une nouvelle table avec des colonnes:
```
CREATE TABLE [tablename] ([colonne1] VARCHAR(50), [colonne2] 
DATETIME);
```
 - Pour ajouter une colonne:
```
ALTER TABLE [tablename] ADD COLUMN [colonne3] VARCHAR(100);
```

- Pour ajouter une colonne avec un ID unique par incrémentation automatique:

```
ALTER TABLE [tablename] ADD COLUMN [colonne4] int NOT NULL AUTO_INCREMENT PRIMARY KEY;
```

 - Insérer un enregistrement dans une table SQL:
```
INSERT INTO [tablename] ([colonne1], [colonne2]) VALUES ('[valeur1]', '[valeur2]');
```

- Fonction MySQL pour afficher la date actuelle:
```
NOW()
```

- Pour afficher le plan d’exécution d’une requête SQL:

```
EXPLAIN SELECT * FROM [tablename];
```

- Pour sélectionner une parties d’un enregistrement:

```
SELECT [colonne1], [colonne2] FROM [table];
```

- Pour compter le nombre d’enregistrement dans une table.

```
SELECT COUNT([colonne]) FROM [table];
```

- Pour sélectionner des enregistrements spécifiques:
```
SELECT * FROM [table] WHERE [colonne] = [valeur];
```

- D’autre sélecteurs: <, >, !=; pour combiner plusieurs sélecteurs utiliser les opérateurs AND et OR. Exemple:

```
SELECT * FROM users WHERE name = 'Alex' OR age > 30;
```

- Sélectionnez les enregistrements qui contiennent la valeur [val].
```
SELECT * FROM [table] WHERE [colonne] LIKE '%[val]%';
```

Sélectionnez les enregistrements qui commencent par la valeur [val].

```
SELECT * FROM [table] WHERE [colonne] LIKE '[val]%';
```

- Sélectionnez les enregistrements commençant par ‘val1’ et se terminant par ‘val2’.

```
SELECT * FROM [table] WHERE [colonne] LIKE '[val1_val2]';
```

- Sélectionner un intervalle de données.

```
SELECT * FROM [table] WHERE [colonne] BETWEEN [valeur1] and [valeur2];

```

- Sélectionnez avec un ordre personnalisé et seulement une limite:
```
SELECT * FROM [table] WHERE [colonne] ORDER BY [colonne] ASC LIMIT [valeur];
```

- Mettre à jour des enregistrements:

```
UPDATE [table] SET [colonne] = '[new_val]' WHERE [colonne] = '[old_val]';
```

- Supprimer des enregistrements:

```
DELETE FROM [table] WHERE [colonne] = [valeur];
```

 - Supprimer tous les enregistrements d’une table (sans supprimer la table elle-même)

```
DELETE FROM [table];
```

- Supprimer tous les enregistrements d’une table:

```
truncate table [table];
```

- Supprimer les colonnes d’une table:
```
ALTER TABLE [table] DROP COLUMN [colonne];
```

- Supprimer une table:
```
DROP TABLE [table];
```
- Supprimer une base de donnée:
```
DROP DATABASE [database];
```

- Créer un alias pour renommer temporairement une colonne:

```
SELECT [colonne] AS [col] FROM [table];
```

 - Exporter un dump de base de données:
```
mysqldump -u [username] -p [database] > backup.sql
```
- Importer un dump de base de données:
```
mysql -u [username] -p -h localhost [database] < backup.sql
```
- Trouvez l’adresse IP de l’hôte Mysql:
```
SHOW VARIABLES WHERE Variable_name = 'hostname';
```
- Faire un SELECT sur plusieurs tables:
```
SELECT [table1].[colonne], [table2].[colonne] FROM [table1], [table2];
```
- Lister tous les utilisateurs:
```
SELECT User FROM mysql.user;
```
-  Créer un nouvel utilisateur:
```
CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';
```

- Accorder un accès complet à l’utilisateur pour * tables:
```
GRANT ALL PRIVILEGES ON database.* TO 'user'@'localhost';
```

# Fonctions d’agrégation

- Sélectionnez des enregistrements sans doublons:
```
SELECT distinct nom, adresse FROM employe WHERE nom = "Alex";
```
- Calculer la somme des enregistrements:
```
SELECT SUM([colonne]) FROM [table];
```
- Calculer la somme des enregistrements de [col] et grouper par [catégorie]:
```
SELECT [column], SUM([col]) FROM [table] GROUP BY [catégorie];
```

- Récupérer la plus grande valeur dans une colonne.
```
SELECT MAX([colonne]) FROM [table];
```
- Récupérer la plus petite valeur dans une colonne.
```
SELECT MIN([colonne]) FROM [table];
```
- Récupérer la moyenne d’une colonne.
```
SELECT AVG([colonne]) FROM [table];
```
- Récupérer la moyenne arrondie et grouper par [catégorie]:
```
SELECT [colonne], ROUND(AVG([colonne]), 2) FROM [table] GROUP BY [catégorie];
```


https://waytolearnx.com/2019/09/liste-des-commandes-mysql.html