# Instalación WordPress Custom

## 1. Clonar el proyecto y renombrar el nombre del proyecto
## 2. Recuperar las dependencias

Las dependencias son gestionadas con Composer, para descargarlas:

```
composer install
```

## 3. Modificar el composer.json
- Modificar "name"
- Modificar "author"
- - Modificar "scripts" con los nombres de los temas y plugins apropiados

# 4. Preparar la configuración WordPress
- Copiar el archivo `wp-config-sample.php` y nombrar la copia `wp-config.php`
- En el archivo `wp-config.php`:
  - Insertar los datos de la Base de Datos
  - Generar los salts (https://api.wordpress.org/secret-key/1.1/salt/)
  - actualizar el WP_HOME http://localhost + el camino hacia el servidor local 

# 5. Instalar WordPress con wp-cli

`wp core install --prompt` 

```
1/6 --url=<url>:[mettre la même url que dans la constante WP_HOME plus haut]
2/6 --title=<site-title>: Demo WP
3/6 --admin_user=<username>: demowp_admin
4/6 [--admin_password=<password>]: demowp
5/6 --admin_email=<email>: hey@truc.com
6/6 [--skip-email] (Y/n): <= On appuie direct sur entrée pour valider le Y par défaut
```
