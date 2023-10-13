php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

composer install --ignore-platform-reqs

In File vendor/laravel/sanctum/src/PersonalAccessToken.php trocar

use Illuminate\Database\Eloquent\Model; 
para
 use Jenssegers\Mongodb\Eloquent\Model;

and write protected $connection = 'mongodb';

and in User Model don't forget to replace use Illuminate\Foundation\Auth\User as Authenticatable;
to use Jenssegers\Mongodb\Auth\User as Authenticatable;

and write
protected $connection = 'mongodb' ;
protected $collection = 'users';


php artisan serve

