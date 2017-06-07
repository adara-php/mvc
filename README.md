# Pacote de gerenciamento do MVC do projeto ADARA

# Usage 1

```php
<?php
use \Adara\MVC\Uri\Parse;
use \Adara\MVC\Uri\Param;
use \Adara\MVC\Uri\GetByURI;

$uri = new GetByURI('router');
$param = new Param($uri);
$parse = new Parse($param);

$parse->getController(); // Controller
$parse->getAction(); // Action
$parse->getParams(); // Params
```

# Usage 2 | Facade
```php
<?php
use \Adara\MVC\Uri\UriFacade;

$facade = new UriFacade('router');
$facade->getController(); // Controller
$facade->getAction(); // Action
$facade->getParams(); // Params
```

# Install composer
```ssh
$ composer require adara-php/mvc
```

# Usage ControllerFactory
```php
<?php

use \Adara\MVC\Uri\UriFacade;

try {
    $factory = new \Adara\MVC\Controller\ControllerFactory(new UriFacade('router'),'Adara\MVC\Controller');
    $factory->factory();
}catch (Exception $e){
    echo $e->getMessage();
}
```