# Lancer le serveur de développement

```bash

php -S localhost:8000 app.php

```

# Consigne pour les tests
Sur le serveur de test pour la base de données
```bash
CREATE DATABASE fruittest DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE fruittest;
CREATE TABLE IF NOT EXISTS products (ID INT NOT NULL AUTO_INCREMENT, name VARCHAR(100), price DECIMAL(7,2), total DECIMAL(7,2) NOT NULL DEFAULT 0.00, PRIMARY KEY(id) )ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO products (name, price) VALUES  ('apple', 10.5), ('raspberry',13), ('strawberry', 7.8)

```