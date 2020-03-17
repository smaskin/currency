**Задание.**

Вызывающий код может получить их из кеша, из базы данных и из внешнего источника по http.
В случае, если курса валют нет в кеше, надо проверить базу, и если там есть, положить в кеш.
Если в базе нет -- проверить внешний источник и положить и в базу, и в кеш.

**Описание**

Так как три источника (внешний клиент, база данных, кеш) возвращают одно и тоже, сделан общий [интерфейс](https://github.com/smaskin/currency/blob/master/src/currency/CurrencyProviderInterface.php).

Реализация бизнес логики - [кеш](https://github.com/smaskin/currency/blob/master/src/currency/cache/Cache.php), [база](https://github.com/smaskin/currency/blob/master/src/currency/db/Db.php), [клиент](https://github.com/smaskin/currency/blob/master/src/currency/client/Client.php).

Взаимодействие с источниками вынесены отдельно, без реализации, как сказано в задании [кеш](https://github.com/smaskin/currency/blob/master/src/currency/cache/CacheService.php), [база](https://github.com/smaskin/currency/blob/master/src/currency/db/DbService.php), [клиент](https://github.com/smaskin/currency/blob/master/src/currency/client/ClientService.php).

Дополнительно добавлен Value Object [валюты](https://github.com/smaskin/currency/blob/master/src/currency/Currency.php). 

Пример использования [тут](https://github.com/smaskin/currency/blob/master/main.php)