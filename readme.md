Annonces
========================

Technologies & versions:
* Laravel 5.8
        
Content
========================
* Create a little Advert App from scratch with Laravel

Install
========================
* Type git clone https://github.com/molodoi/annonces.git annonces
* Type cd annonces
* Type composer install
* Type composer update
* Copy .env.example to .env
* Type php artisan key:generate to generate secure key in .env file
* if you use MySQL in *.env* file :
   * set DB_CONNECTION
   * set DB_DATABASE
   * set DB_USERNAME
   * set DB_PASSWORD
* type `php artisan migrate --seed` to create and populate tables