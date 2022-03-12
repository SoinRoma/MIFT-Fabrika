<h1 align="center">MIFT-Fabrika</h1>

## Описание
Государственный проект - Фабрика проектов. 
Здесь начинающие преприниматели могут оставить свою заявку.

### Используемые технологии
![PHP](https://img.shields.io/badge/-PHP-black?style=flat-square&logo=php&logoColor=php)
![YII2](https://img.shields.io/badge/-Yii2-black?style=flat-square&logo=yii&logoColor=yii)


### Предварительные действия

1 - Установить локальный сервер [OpenServer](https://ospanel.io/).

2 - Настроить OpenServer:
+ В основных настройках поставить галочки на "Автозапуск сервера" и "Требовать учётную запись Администратора".
+ В настройках кодировки выбрать utf-8 и utf-8_general_ci.
+ В настройках доменах добавить папку с проектом и указать путь до frontend/web.

3 - Установить Composer для проекта:
+ Заходим в OpenServer и выбираем консоль.
+ Переходим в консоли к папке \OpenServer\domains\laravel-blog.
+ Обновить композер.
```
composer install
```

4 - Настроить PhpStorm:
+ Заходим в настройки и переходим в раздел Settings\Languages&Frameworks.
+ Дальше в разделе PHP выбираем версию(не ниже 7.1).
+ И указываем путь для интерпретатора (\OpenServer\modules\php\PHP_7.1\php.exe).

### Запуск проекта

1 - Запустить проект в IDE(PhpStorm).