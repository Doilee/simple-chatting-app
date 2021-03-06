# SIMPLE CHAT API WITH SQLITE

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

Now run
```
php artisan serve
```

## How to start?
Login, send a message and check the history!

The API Endpoints needed for this can be found here:

https://documenter.getpostman.com/view/2160335/RznFqdwe

Let's get shit done!