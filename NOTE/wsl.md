# WSL
- Installer une distribution Linux spécifique
```
wsl --install --distribution <Distribution Name>
```
- Lister les distributions Linux disponibles - PowerShell
```
wsl --list --online
```
- Lister les distributions Linux installées
```
wsl --list --verbose
```
- Chnger la version de WSL de 1 à 2
```
wsl --set-version <distribution name> <versionNumber>
```
- Définir la version de WSL par défaut -PowerShell
```
wsl --set-default-version <Version>
```
- Définir par défault la version de linux
```
wsl --set-default <Distribution Name>
```
- Mise à jour de WSL
```
wsl --update

```

- Etat de WSL :
```
wsl --status

```

- Démarage sur un user précis
  
  ```
  wsl -u <Username>`, `wsl --user <Username>
  ```

- Commande pour ouvrire une distribution de linux sur n'importe quel utilisateur 
```
wsl --distribution <Distribution Name> --user <User Name>
```

- Fermer 
```
wsl --shutdown
```

- Mettre fin
```
wsl --terminate <Distribution Name>
```

- Exporter une distribution vers un fichier TAR
```
wsl --export <Distribution Name> <FileName>
```
- Importer une nouvelle distribution
```
wsl --import <Distribution Name> <InstallLocation> <FileName>
```
- Pour désinscrire et désinstaller une distribution WSL :
```
wsl --unregister <DistributionName>
```
- Monter un disque ou un périphérique
```
wsl --mount <DiskPath>
```

