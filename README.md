<p align="center">
    <a href="https://github.com/yii2-extensions/app-advanced" target="_blank">
        <img src="https://www.yiiframework.com/image/yii_logo_light.svg" height="100px;">
    </a>
    <h1 align="center">Web Application Advanced</h1>
    <br>
</p>

<p align="center">
    <a href="https://www.php.net/releases/8.1/en.php" target="_blank">
        <img src="https://img.shields.io/badge/PHP-%3E%3D8.1-787CB5" alt="php-version">
    </a>
    <a href="https://github.com/yiisoft/yii2/tree/2.2" target="_blank">
        <img src="https://img.shields.io/badge/Yii2%20version-2.2-blue" alt="yii2-version">
    </a>
    <a href="https://github.com/yii2-extensions/app-advanced/actions/workflows/build.yml" target="_blank">
        <img src="https://github.com/yii2-extensions/app-advanced/actions/workflows/build.yml/badge.svg" alt="PHPUnit">
    </a>
    <a href="https://codecov.io/gh/yii2-extensions/app-advanced" target="_blank">
        <img src="https://codecov.io/gh/yii2-extensions/app-advanced/graph/badge.svg?token=jVIfpiw9Vt" alt="Codecov">
    </a>    
    <a href="https://github.com/yii2-extensions/app-advanced/actions/workflows/static.yml" target="_blank">
        <img src="https://github.com/yii2-extensions/gii/actions/workflows/static.yml/badge.svg" alt="PHPStan">
    </a>
    <a href="https://github.com/yii2-extensions/app-advanced/actions/workflows/static.yml" target="_blank">
        <img src="https://img.shields.io/badge/PHPStan%20level-5-blue" alt="PHPStan level">
    </a>
    <a href="https://github.styleci.io/repos/706767349?branch=initial-commit" target="_blank">
        <img src="https://github.styleci.io/repos/706767349/shield?branch=initial-commit" alt="Code style">
    </a>        
</p>

## Directory structure

```text
root
├── config  
│   ├── backend                Backend configuration.            
│   ├── console                Console configuration.
│   ├── frontend               Frontend configuration.
│   ├── config-plugin.php      Plugin configuration.
│   ├── messages.php           Translation configuration.
│   ├── params-backend.php     Backend parameters.
│   ├── params-console.php     Console parameters.
│   ├── params-frontend.php    Frontend parameters.
│   └── params.php             Common parameters.
├── backend             
│   ├── config                  Backend tests configuration.
│   ├── public                  Backend web server public.
│   └── src                     
│       ├── Framework           
│       │   ├── Asset           Asset bundle files.
│       │   └── resource         
│       │       ├── css         Css files.
│       │       ├── js          Js files.
│       │       ├── layout      Layout files.
│       │       └── message     Translation files.
│       ├── UseCase
│       │   └── Site            Site use case.
│       └── Tests               Backend tests.
├── common             
│   └── src                     
│       └── Framework           
│           └── Controller      Common controller files.
├── console             
│   ├── config                  Console tests configuration.
│   └── src                     
│       ├── UseCase
│       │   └── Hello           Hello use case.
│       └── Tests               Console tests.
├── frontend             
│   ├── config                  Frontend tests configuration.
│   ├── public                  Frontend web server public.
│   └── src                     
│       ├── Framework           
│       │   ├── Asset           Asset bundle files.
│       │   ├── EventHandler    Event handler files.
│       │   └── resource         
│       │       ├── css         Css files.
│       │       ├── js          Js files.
│       │       ├── layout      Layout files.
│       │       └── message     Translation files.
│       ├── UseCase
│       │   ├── About           About use case.
│       │   ├── Contact         Contact use case.
│       │   └── Site            Site use case.
│       └── Tests               Frontend tests.
└── vendor                      Composer dependencies.

```

## Installation

<p align="justify">
If you do not have <a href="http://getcomposer.org/" title="Composer" target="_blank">Composer</a>, you may install it by following the instructions at <a href="http://getcomposer.org/doc/00-intro.md#installation-nix" title="getcomposer.org" target="_blank">getcomposer.org</a>.
</p>

You can then install this project app-basic using the following command:

```shell
composer create-project --prefer-dist --stability=dev yii2-extensions/app-advanced myapp
```

<p align="justify">
Now you should be able to access the application through the following URL, assuming `public` is the directory
directly under the Web root.
</p>

## Testing

[Check the documentation testing](/docs/testing.md) to learn about testing.

## Our social networks

[![Twitter](https://img.shields.io/badge/twitter-follow-1DA1F2?logo=twitter&logoColor=1DA1F2&labelColor=555555?style=flat)](https://twitter.com/Terabytesoftw)

## License

The MIT License. Please see [License File](LICENSE.md) for more information.
