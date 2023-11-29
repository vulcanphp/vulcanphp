# VulcanPhp
Vulcan PHP is a MVC based micro framework to create PHP Applications easily.

## What is VulcanPhp
VulcanPhp is a open-source highly lightweight model-view-controller (MVC) based system. <br />
to create php application on fly. it is secure and has all the common mechanism to handle a php application.

## Installation

It's recommended that you use [Composer](https://getcomposer.org/) to install VulcanPhp

```bash
$ composer create-project vulcanphp/vulcanphp first-app
```

## Start The Application

```bash
$ cd first-app

$ php vulcan -s
```

## Vulcan CLI

```bash
$ php vulcan -h
```
to print all the available commands in VulcanPhp.

### Create a Vite Application with vulcan cli

1.
```bash
$ php vulcan vite
```
it will simply generate a vite application startup project in VulcanPhp.

2.
```php

// render vite application
return vite_view();


```

3.
```bash
$ npm run dev
```
thats it..

## VulcanPhp Documentation
- [Routing System](https://github.com/vulcanphp/phprouter#readme)
- [Database](https://github.com/vulcanphp/simpledb#readme)
- [Caching System](https://github.com/vulcanphp/fastcache#readme)
- [Translator](https://github.com/vulcanphp/translator#readme)
- [Files System](https://github.com/vulcanphp/filesystem#readme)
- [Http/Curl](https://github.com/vulcanphp/easycurl#readme)
- [Sweet View](https://github.com/vulcanphp/sweetview#readme)
- [VulcanPhp Core](https://github.com/vulcanphp/core#readme)