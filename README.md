// iniciar server
Php artisan serve

//
configurar database en archivo .env

// crear migraciones para crear las tablas

php artisan make:migration create_products_table

 php artisan make:migration create_categorys_table

php artisan make:migration create_orders_table

 php artisan make:migration create_users_products_table

// ejecutar las migraciones

 php artisan migrate

// si necesitas añadir nuevos campos a las tabla, con este comando se actualiza

 php artisan migrate:refresh

// si necesitas eliminar las tablas

 php artisan migrate:rollback

// crear modelos, en singular

php artisan make:model Product

php artisan make:model Category

php artisan make:model Order

php artisan make:model UserProduct


// crear factorias

php artisan make:factory ProductFactory

 php artisan make:factory CategoryFactory

php artisan make:factory OrderFactory

php artisan make:factory UserProductFactory
// subir las semillas la informacion

php artisan sb:seed