ChancerosUTB
============

Ingresar a backend e instalar las librerías de Laravel, ejecutar:

    cd backend
    composer install
    php artisan migrate

Para ejecutar el servidor:

    php artisan serve

Ingesar a http://localhost:8000

Agregar al composer.json:

    "require-dev": {
    	"way/generators": "~3.0"
    }

Y luego ejecutar:

    composer update --dev

Y agregar en app/config/app.php en el provider array lo siguiente:

    'Way\Generators\GeneratorsServiceProvider'

Recuerden leer la documentación de:

* http://getbootstrap.com/getting-started/
* http://bootswatch.com/
* http://laravel.com/docs/quick
* https://laracasts.com
* http://learn.jquery.com
* http://www.devcode.la/cursos/curso-basico-de-laravel/

Usar un buen editor de código:

* https://atom.io
* https://netbeans.org

