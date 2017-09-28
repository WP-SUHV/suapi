Swiss Unihockey API
=========================

PHP library to connect to [swiss unihockey API V2](http://api-v2.swissunihockey.ch/api/doc).

## Development with Docker

Use this command to bring up the Docker container with `PHP`, `xDebug`, `PHPUnit`, `Composer` and `Grunt`

```
xdebug_listener_ip=`ifconfig | grep "inet " | grep -Fv 127.0.0.1 | awk '{print $2}'`
docker run -it --volume $PWD:/var/www/html -e XDEBUG_CONFIG="remote_host=$xdebug_listener_ip remote_port=9000 remote_enable=1 idekey=PHPSTORM" -e PHP_IDE_CONFIG="serverName=docker-xdebug" phpdocker/phpdocker /bin/bash
```

### Debug configuration in PhpStorm

1. Open preferences
1. Go to `Languages & Frameworks -> PHP -> Debug -> Servers`
1. Add a server with name `docker-xdebug`
1. Configure project root with remote path `/var/www/html`

### Testing ###

1. Install dependencies with composer `composer install` / `composer update`
1. Run tests `vendor/bin/phpunit --configuration phpunit.xml --testsuite unit`
1. Run specific test `php -d$XDEBUG_EXT vendor/bin/phpunit --configuration phpunit.xml --testsuite unit --filter testGetRankingsForLigaTeam`
