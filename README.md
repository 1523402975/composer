# composer
### mongolog指定版本安装
- 1、安装好composer，执行如下语句：
`
composer require monolog/monolog
`
- 2、执行index.php
### mongolog通过composer.json安装
- 1、新建empty/composer.json
`
{
    "require": {
        "monolog/monolog": "1.2.*"
    }
}
`
- 2、执行安装
`
composer install
`
