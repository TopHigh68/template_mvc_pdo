# 🧩 Template MVC PHP

Ce projet est un **template de base** suivant le **modèle MVC (Modèle-Vue-Contrôleur)** développé en PHP pur. Il sert de **fondation pour créer facilement des applications web structurées** sans framework.

## 📁 Structure du projet

```
mon-projet-mvc/
│
├── app/               # Code métier de l'application
│   ├── controllers/   # Contrôleurs (logique métier)
│   ├── models/        # Modèles (base de données)
│   └── views/         # Vues (HTML/PHP)
│
├── core/              # Cœur du système MVC (Router, Controller, Model)
│
├── config/            # Fichiers de configuration (base de données, etc.)
│
├── public/            # Point d’entrée (index.php) et fichiers publics
│
├── .htaccess          # Redirection des URLs vers index.php
└── README.md
```

## 🚀 Fonctionnalités

- Architecture propre en MVC
- Routeur simple pour la gestion des URLs
- Connexion à une base de données via PDO
- Support des vues dynamiques avec passage de variables
- Séparation claire entre logique, données et présentation

## ⚙️ Prérequis

- PHP 7.4 ou supérieur
- Serveur web local (Apache, Nginx ou `php -S`)
- Base de données MySQL/MariaDB

## 🛠️ Installation

1. Clone ou télécharge ce dépôt :

```bash
git clone https://github.com/votre-utilisateur/mon-projet-mvc.git
```

2. Crée une base de données MySQL, par exemple `mvc_db`.

3. Crée la table `posts` pour tester :

```sql
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
);

INSERT INTO posts (title, content) VALUES
('Article de test', 'Ceci est un article d\'exemple.');
```

4. Configure tes identifiants de base de données dans `config/config.php` :

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc_db');
define('DB_USER', 'root');
define('DB_PASS', '');
```

5. Lance le serveur local PHP :

```bash
cd public
php -S localhost:8000
```

6. Va sur [http://localhost:8000](http://localhost:8000) pour voir le résultat.

## 📌 Exemple d'utilisation

La page d'accueil affiche dynamiquement une liste d’articles récupérés depuis la base de données grâce à un **modèle** (`Post.php`) et un **contrôleur** (`HomeController.php`) qui charge une **vue** (`home.php`).

## 🔧 À personnaliser

Ce template est volontairement minimaliste. Pour l’adapter à tes futurs projets, tu peux :
- Ajouter un système d’authentification
- Ajouter un gestionnaire d’erreurs
- Intégrer une couche de validation de formulaire
- Ajouter un système de templates (comme Blade ou Twig si besoin)

## 📂 Licence

Ce projet est libre d'utilisation. Tu peux le copier, le modifier, et l’utiliser pour tes projets personnels ou professionnels.

---

Développé avec ❤️ pour apprendre et réutiliser le modèle MVC sans frameworks.
