<?

namespace currency\cache;

class CacheService implements CachePoolInterface
{
    /**
     * @param string $key
     * @throws \RuntimeException
     * @return CacheItemInterface
     */
    public function getItem(string $key): CacheItemInterface
    {
        // TODO: return cache item by key from cache
    }

    /**
     * @param CacheItemInterface $item
     * @throws \RuntimeException
     * @return bool
     */
    public function save(CacheItemInterface $item): bool
    {
        // TODO: save item to cache pool
    }
}
