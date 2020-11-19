# Modèle de configuration de Webpack pour WordPress

## Installation

1. Exécuter dans le répertoire la commande `npm install` qui va installer toute les dépendances Node.js nécessaire au bon fonctionnement de l'application.
2. Cela va nous créer notre node_module (,ne pas oublier de le placer dans .gitignore)
3. Exécuter une des commandes ci-dessous.

## Commandes disponibles

- `npm run start` : Démarre le serveur de développement en utilisant tout en utilisation [Browsersync](https://www.browsersync.io/)
- `npm run build:dev` : Génère les resources front sans compression en vue d'une utilisation dans un environnement de développemnt
- `npm run build:prod` : Génère les resources front avec compression (minify, uglify) en vue d'une utilisation dans un environnement de production
- `npm run clean` : Supprime les fichiers générés par Webpack
- `npm run clean:all` : Supprime les fichiers générés par Webpack ainsi que le répertoire des dépendances installées avec NPM (`node_modules`)


### Notes: 
- "webpack-cli": "^3.3.6" => Latest version number affects the npm launcher