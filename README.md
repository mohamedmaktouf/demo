<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Project Demo</h1>
    <br>
</p>

Yii 2 CRUD API


DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.6.0.


INSTALLATION
------------

### clone project


~~~
git clone https://github.com/mohamedmaktouf/demo.git

~~~
### install dependencies


~~~
composer install 

~~~



### db configuration

create database and setUp db name in config/db file


```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=db_name',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```
now you can run the application
~~~
php yii serve 
~~~

<h3>I had a date() with PHP and I had to mktime() for it.
</h3>

