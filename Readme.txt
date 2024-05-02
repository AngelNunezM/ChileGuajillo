Pasos para levantar correctamente la API-BACKEND:

1. Primero debemos de renombrar el archivo ".envExample" a ".env" y colocar tus credenciales de la BD, debe de verse
como se muestra a continuacion:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="aqui el nombre de tu base de datos"
DB_USERNAME=root
DB_PASSWORD=

2.Debemos de correr el siguiente comando "composer install" en la terminal para instalar las dependencias necesarias,
 automaticamente se creara la carpeta "vendor".

3. Correr el siguiente comando "php artisan serve" en la terminal para levantar la API, y automaticamente.


//comando para levantar la apiBackend
php artisan serve

//comando para correr los seeders
php artisan migrate:refresh --seeder

