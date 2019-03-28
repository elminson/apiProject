## Documentation

Erply Product API Assignment

## Requirements 
Write a small API that uses a database backend.

The main data entity in your API is a "product". A product must have the following fields/properties:

- ID (integer, assigned automatically)

- Name (alphanumeric, at most 100 characters)

- Price (decimal, with 2 decimal places)


1) Implement API calls for creating, updating and deleting these records.

2) Implement API calls for retrieving a list of products, and for searching a product by name.

3) Ensure that the API calls have proper error handling, and output sensible error messages.

4) Document the API: explain the proper way to use it. Assume that the reader is not familiar with the API, and will be using it as a service (having no access to the source code).

Write the application in PHP. Use a MySQL database.

Please submit:

- API source code (including a README file with deployment instructions);

- SQL schema description;

- Documentation.

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.
However this project was created using docker, you can install as a regular Laravel project in any server that support php/mysql

### Requirements 

    PHP     7.1.27
    Mysql   5.6
    Docker  18.09.2 (build 6247962) (optional if using docker)
    
    libmcrypt-dev mysql-client libmagickwand-dev git 
    php ext: imagick mcrypt pdo_mysql mbstring zip


### If you will use docker run this instructions
    
    cd product
    docker-compose build
    docker-compose up

The app will be accessible by the port 8080

```
http://127.0.0.1:8080/ 
```

In order to access the api you will need register in 

```
http://127.0.0.1:8080/register 
```

## Install the project 
(replace http://127.0.0.1:8080/ with your server ip and port)

### Up and running

In order to run the project after install git and docker you will need
1) clone this repository.
3) Build the app.
4) Start and runs the entire app.

```
git clone https://github.com/elminson/apiProject.git
cd apiProject
docker-compose build
docker-compose up
```
Now you can enter in the docker container 
```sh
docker exec -it apiproject_app_1  bash
```
and run this 
```sh
composer install
composer update
php artisan config:clear
php artisan config:cache
composer dump-autoload
php artisan key:generate
php artisan migrate
php artisan db:seed

```

The app will be accesible by the port 8080 
```
http://127.0.0.1:8080/
```


### SQL schema `db_schema.sql`
The SQL Schema is included with the project, however this SQL Schema is loaded 
by  running `php artisan migrate` 

### Config file `.env`
If you are using docker not modification will be needed inside of `.env` file. 
If the project is loaded in a regular server (not execute by docker)  you can modify 
the database configuration / APP name / APP Pagination / etc. 

### Install (no using docker) 
In the folder ./product you should run
```sh
composer install
composer update
php artisan config:clear
php artisan config:cache
composer dump-autoload
php artisan key:generate
php artisan migrate
php artisan db:seed

```



### Running PHPUnit (total Test Cases Created  (7 tests, 67 assertions) All OK )
You will need to replace the ip for your actual ip (domain name) from line 14 
    
    file tests/Unit/ProductTest.php
    protected $server_ip = '172.20.0.4';
    
Also replace the line 15 with the full uri of the project 

    Ex.
    protected $uri = 'product/public/api/products';
    
run inside *product* folder 
```sh
php vendor/bin/phpunit
```


After register (http://127.0.0.1:8080/register )you can access your <span style="color:green"><b>API Toke</b></span> from your dashboard <Br>

If you generate a new <span style="color:green"><b>API Toke</b></span> this will invalidate the previews one. 

### Documentation 
The documentation for the api use is available in 

```sh
http://localhost:8080/docs/1.0
```

The documentation was created using SnowBoard project 
`snowboard html -o resources/views/docs/index.blade.php  apiDocs_snowboard.apib`

    https://github.com/bukalapak/snowboard
    https://apiblueprint.org/developers.html
    
### Errors or 500
If you receive any of this error please follow this steps 
- First of all check your file permissions.
- To fix file permissions sudo chmod 755 -R your_project
- Then chmod -R o+w your_project/storage to write file to storage folder.
- php artisan cache:clear
- composer dump-autoload
- php artisan key:generate
- Then check server requirements as per the laravel requirement.
- Many times you got this error because of the php version. Try changing your php version in cpanel.
- Then configure your .htaccess file properly
- Check the properly user and group are assigned to the folder


## Built With

* [Laravel](https://laravel.com/) - The PHP framework used
* [Docker](https://docker.com) - Used for containerization
* [Bukalapak/snowboard](https://github.com/bukalapak/snowboard) - Documentation Generation
* [Apiblueprint](https://apiblueprint.org/developers.html) - Documentation API Blueprint


## Authors

* **Elminson De Oleo Baez** - [elminson](https://github.com/elminson)
