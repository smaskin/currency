<?

namespace currency\cache;

use currency\Currency;
use currency\CurrencyProviderInterface;

class Cache implements CurrencyProviderInterface
{
    private $currencyProvider;
    private $cachePool;

    public function __construct(CurrencyProviderInterface $currencyProvider, CachePoolInterface $cachePool)
    {
        $this->cachePool = $cachePool;
        $this->currencyProvider = $currencyProvider;
    }

    public function getValue(Currency $currency): string
    {
        $key = $this->getKey($currency);

        $cacheItem = $this->cachePool->getItem($key);

        if ($cacheItem->isHit()) {
            return $cacheItem->get();
        }

        $result = $this->currencyProvider->getValue($currency);

        $cacheItem->set($result);

        $this->cachePool->save($cacheItem);

        return $result;
    }

    private function getKey(Currency $currency): string
    {
        return md5($currency->getCode());
    }
}
