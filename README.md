# EasyTool

This is a simple PHP framework built with [Composer](https://getcomposer.org/).

It uses below libraries:

- https://docs.laminas.dev/laminas-cache/
- https://docs.laminas.dev/laminas-db/
- https://docs.laminas.dev/laminas-di/
- https://symfony.com/doc/current/console.html

and follows below standards:

|Standard|Title|Description|
|---|---|---|
|[PSR-1](https://www.php-fig.org/psr/psr-1/)|Basic Coding Standard|Passed [PHP_CodeSniffer](https://github.com/squizlabs/php_codesniffer) checking|
|[PSR-3](https://www.php-fig.org/psr/psr-3/)|Logger Interface|Implements<br/>- `\Psr\Log\AbstractLogger`|
|[PSR-4](https://www.php-fig.org/psr/psr-4/)|Autoloader|Use [Composer](https://getcomposer.org/) as dependency management|
|[PSR-6](https://www.php-fig.org/psr/psr-6/)|Caching Interface|Implements<br/>- `\Psr\Cache\CacheItemPoolInterface`<br/>- `\Psr\Cache\CacheItemInterface`|
|[PSR-7](https://www.php-fig.org/psr/psr-7/)|HTTP message interfaces|Implements<br/>- `\Psr\Http\Message\RequestInterface`<br/>- `\Psr\Http\Message\ResponseInterface`<br/>- `\Psr\Http\Message\StreamInterface`<br/>- `\Psr\Http\Message\UriInterface`|
|[PSR-11](https://www.php-fig.org/psr/psr-11/)|Container interface|Implements<br/>- `\Psr\Container\ContainerInterface`|
|[PSR-12](https://www.php-fig.org/psr/psr-12/)|Extended Coding Style|Passed [PHP_CodeSniffer](https://github.com/squizlabs/php_codesniffer) checking|
|[PSR-13](https://www.php-fig.org/psr/psr-13/)|Link definition interfaces|pending|
|[PSR-14](https://www.php-fig.org/psr/psr-14/)|Event Dispatcher|Implements<br/>- `\Psr\EventDispatcher\EventDispatcherInterface`<br/>-  `\Psr\EventDispatcher\ListenerProviderInterface`|
|[PSR-15](https://www.php-fig.org/psr/psr-15/)|HTTP Server Request Handlers|Implements<br/>- `\Psr\Http\Message\ServerRequestInterface`<br/>- `\Psr\Http\Server\RequestHandlerInterface`|
|[PSR-17](https://www.php-fig.org/psr/psr-17/)|HTTP Factories|Implements<br/>- `\Psr\Http\Message\RequestFactoryInterface`<br/>- `\Psr\Http\Message\ResponseFactoryInterface`<br/>- `\Psr\Http\Message\StreamFactoryInterface`<br/>- `\Psr\Http\Message\UriFactoryInterface`|
|[PSR-18](https://www.php-fig.org/psr/psr-18/)|HTTP Client|pending|

## Environment Requirement

- PHP 7.4+
- MySQL 5.7+
- Redis

## Installation

Create a new folder as project root, execute below command to get source files.

```sh
composer create-project easy-tool/easy-tool .
```

## File Structure

### Application Structure

|Directory|Description|
|---|---|
|`app/config`|Contains application config files, see [here](#application-config) for more details.|
|`app/modules`|Store local customized modules. For example, a customer module may be located at `app/modules/Customer`, with namespace prefix `App\Customer\`.|
|`bin`|There is a `run` file which is used to execute console command.|
|`pub`|Store files which can be accessed through internet.|
|`var`|Store temporary files like cache, log etc.|
|`vendor`|Composer library folder.|

### Module Structure

File structure of each module is flexible, but some directries are still need to follow their rules:

|Directory|Description|
|---|---|
|`Command`|System retrieves instantiable classes, which extend `Symfony\Component\Console\Command\Command`, as console commands.|
|`Controller/Backend`|System retrieves backend controller classes from this folder.|
|`Controller/Frontend`|System retrieves frontend controller classes from this folder.|
|`Setup`|System retrieves instantiable classes, which extend `EasyTool\Framework\App\Module\Setup\AbstractSetup`, as setup scripts on runnig `setup:upgrade` command.|
|`config`|Module config files, see [here](#module-config) for more details.|

## Config Files

### Application Config

|Filename|Description|
|---|---|
|`di.php`|Dependency injection configuration, click [here](https://github.com/easy-tool-php/easy-tool/blob/main/app/config/di.php) to see file structure, check [https://docs.laminas.dev/laminas-di/v3/config/](https://docs.laminas.dev/laminas-di/v3/config/#configuration) for more details.|
|`env.php`|Environment settings including route name, cache setting, database setting etc., click [here](https://github.com/easy-tool-php/easy-tool/blob/main/app/config/env.php) to see file structure.|
|`events.php`|Event listener settings, click [here](https://github.com/easy-tool-php/easy-tool/blob/main/app/config/events.php) to see file structure.|
|`middlewares.php`|Middleware class list for handling HTTP request, click [here](https://github.com/easy-tool-php/easy-tool/blob/main/app/config/middlewares.php) to see file structure.|
|`modules.php`|Module status.|

### Module Config

|Filename|Description|
|---|---|
|`api.php`|HTTP API route list.|
|`di.php`|Dependency injection configuration, check [https://docs.laminas.dev/laminas-di/v3/config/](https://docs.laminas.dev/laminas-di/v3/config/#configuration) for more details.|
|`events.php`|Event listener settings, file structure is same with the application one.|
