# Laravel com MongoDB
Testando integração do MongoDB com Laravel

## Começando
Essas instruções fornecerão uma base para integrar o banco de dados MongoDB com o framework Laravel.

### Pré-requisitos
* Baixar a dll `php_mongodb.dll`, referente a versão do PHP que você usa, no site [pecl](https://pecl.php.net/package/mongodb/1.9.0/windows)
* Inserir a dll no diretorio ext do PHP.
* Inserir a linha ` extension=php_mongodb.dll` no arquivo php.ini

### Instalar laravel
```bash
composer create-project --prefer-dist laravel/laravel
```

### Configurar MongoDB
* Adicionar as linhas abaixo no arquivo `.env`
```php
MONGO_DB_HOST=127.0.0.1
MONGO_DB_PORT=27017
MONGO_DB_DATABASE=mongocrud
MONGO_DB_USERNAME=
MONGO_DB_PASSWORD=
```

* Adicionar as linhas abaixo no arquivo `config\database.php` dentro de connections.
```php
'mongodb' => [
    'driver'   => 'mongodb',
    'host'     => env('MONGO_DB_HOST', 'localhost'),
    'port'     => env('MONGO_DB_PORT', 27017),
    'database' => env('MONGO_DB_DATABASE'),
    'username' => env('MONGO_DB_USERNAME'),
    'password' => env('MONGO_DB_PASSWORD'),
    'options'  => []
],
```

### Instalar o pacote `jenssegers/mongodb`
```
composer require jenssegers/mongodb
```

### Configurar o provider *MongodbServiceProvider* em `config\app.php `
```php
'providers' => [
    Jenssegers\Mongodb\MongodbServiceProvider::class,
]
```

## Construído com

* [Laravel](https://github.com/laravel/laravel) - Framework PHP
* [MongoDB](https://github.com/mongodb/mongo) - Banco de Dados NoSQL

## Autor
* [Rafael Gonçalves](https://github.com/rafaelswitek)

## Base
* [Artigo](https://appdividend.com/2018/05/10/laravel-mongodb-crud-tutorial-with-example/)