# SIMPLE CHATBOT API WITH SQLITE

### Setup

Installs all the needed packages
```$xslt
composer install
```

Copy an .env file from .env.example
```$xslt
cp .env.example .env
```
Then set the database environment variables in your .env file!

Run all the migrations
```
php artisan migrate
```

Set up the passport files and database fields (needed for authentication)
~~~~
php artisan passport:install 
~~~~

Seed **after** installing passport for correctly stored passwords
```$xslt
php artisan db:seed
```
  
Run migrations for the test database (make sure to create database named retrope_test first)
```$xslt
php artisan migrate --database=mysql_testing
```

Check to see if the tests are A OK!
```$xslt
phpunit
```

### If you have problems running the tests
Make sure to run these every time after you run `php artisan optimize`!

Clears the caches
```$xslt
php artisan config:clear
php artisan cache:clear
```

and try again
```$xslt
phpunit
```

Let's get shit done!