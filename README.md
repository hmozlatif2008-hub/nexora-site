# NEXORA

Site de l'institut NEXORA construit avec Laravel. Le CSS, le JavaScript et les illustrations sont servis directement depuis le dossier `public/`.

## Lancer le site sous Windows

1. Installer les dépendances PHP si nécessaire :

   ```powershell
   composer install
   ```

2. Démarrer le serveur local :

   ```powershell
   composer dev
   ```

   Ou directement :

   ```powershell
   php artisan serve --host=127.0.0.1 --port=8765
   ```

3. Ouvrir [http://127.0.0.1:8765](http://127.0.0.1:8765).

Les fichiers du site sont dans `public/css/style.css`, `public/js/copilot.js` et `public/images/fields/`.
