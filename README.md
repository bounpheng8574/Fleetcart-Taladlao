#How to setup Taladlao
1. clond git https://gitlab.com/vx-dev/taladlao-web.git
2. create folders sessions, views, cache in /storage/framework
3. npm install, composer install
5. setup env
4. run "php artisan key:generate"
6. setup /public/storage/media

#if not working
try to enable mod rewrite
and add
<Directory /var/www/html>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
</Directory>

intro $ sudo nano /etc/apache2/sites-available/000-default.conf
then $ sudo systemctl restart apache2

#How to add new module
1. run command "php artisan module:make <module-name>"
2. create module view folder in "Themes" (If already has front-end)
3. Remove all function from service provider
4. remove all in start.php
5. run "php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"

#How to gen route provider
1. run command "php artisan module:route-provider <module-name>"
2. if not success copy from other module
