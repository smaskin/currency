<?

use currency\cache\Cache;
use currency\cache\CacheService;
use currency\client\Client;
use currency\client\ClientService;
use currency\Currency;
use currency\db\Db;
use currency\db\DbService;

spl_autoload_register(function ($className) {
    include_once 'src/' . str_replace('\\', '/', $className) . '.php';
});

try {
    $currency = new Currency('EUR');
    $currencyProvider = new Cache(
        new Db(
            new Client(
                new ClientService()
            ),
            new DbService()
        ),
        new CacheService()
    );
    echo $currencyProvider->getValue($currency);
} catch (Exception $error) {
    echo $error->getMessage();
}
