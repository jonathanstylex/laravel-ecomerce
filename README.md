# Pasos
email Admin: elissa@gmail.com

## Starting 🚀
* // iniciar server
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

// starte kit tambien se puede crear custom

composer require laravel/breeze –dev

php artisan vendor:publish --tag=laravel-assets --ansi –force

php artisan  breeze:install 

// instalar dependencias js

Unsupported engine {
npm WARN EBADENGINE   package: 'vite@4.4.9',
npm WARN EBADENGINE   required: { node: '^14.18.0 || >=16.0.0' },
npm WARN EBADENGINE   current: { node: 'v14.17.2', npm: '9.2.0' }
npm WARN EBADENGINE }

npm install

npm run dev


// obtener usuario auth

https://www.laravelia.com/post/laravel-get-logged-in-user-id-in-controller

// relacion muchos a muchos

https://www.itsolutionstuff.com/post/laravel-many-to-many-eloquent-relationship-tutorialexample.html

// uso de and en laravel

https://www.parthpatel.net/laravel-multiple-where-and-or-and-conditions-example/



