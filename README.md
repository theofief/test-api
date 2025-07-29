# 🧪 Test API

I recommend you to use Docker desktop for better experience with databases and local dns.

A simple Symfony-based test API for development and experimentation.  
Includes user creation, database handling, and basic project structure.

---

## 🚀 Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/theofief/test-api.git
cd test-api
```

### 2. Install dependencies

```bash
composer install
```

### 3. Set up your .env.local file
Duplicate the .env file and configure your local environment (DB credentials, etc.)

```bash
cp .env .env.local
```

Example for .env.local:

```ini
DATABASE_URL="mysql://root:password@127.0.0.1:3306/test_api"
```

## 🛠️ Database Setup
Run the following commands to create and migrate your database:

```bash
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

##👤 Create a test user
You can create a user via command line using:

```bash
php bin/console app:create-user exemple@exemple.com password first_name last_name
```
Replace the values with actual ones.

##📂 Project Structure
```bash
📦 test-api/
├── assets/                # Fichiers statiques (images, css, js, fonts…)
├── bin/                   # Binaries exécutables, scripts CLI
├── config/                # Config Symfony (routes, services, packages)
├── migrations/            # Fichiers de migration Doctrine
├── public/                # Point d'entrée web (index.php, assets publics)
├── src/                   # Code source PHP (controllers, entities, services)
├── templates/             # Templates Twig pour les vues
├── tests/                 # Tests unitaires et fonctionnels
├── translations/          # Fichiers de traduction
├── .env                   # Variables d'environnement par défaut
├── .env.dev               # Variables d'environnement pour dev
├── .env.test              # Variables d'environnement pour tests
├── .gitignore             # Fichiers et dossiers ignorés par Git
├── LICENSE                # Licence du projet (MIT)
├── README.md              # Documentation du projet
├── composer.json          # Déclaration des dépendances PHP
├── composer.json_old      # Ancienne version de composer.json (backup)
├── composer.lock          # Versions précises des dépendances installées
├── phpunit.dist.xml       # Configuration PHPUnit
├── symfony.lock           # Gestionnaire de cache des paquets Symfony
├── compose.yaml           # Config Docker Compose principale
└── compose.override.yaml  # Config Docker Compose override pour dev
```

##📌 Requirements
```bash
 - PHP 8.1+

 - Composer

 - Symfony CLI (optional)

 - MySQL or compatible database (I'm using Heidi)
```


## 📜 License

This project is under the MIT License.
Feel free to modify, share, and build on it!


🧑‍💻 Author
Made with ❤️ by @theofief
