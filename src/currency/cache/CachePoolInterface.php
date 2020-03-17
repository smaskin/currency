<?

namespace currency\cache;

interface CachePoolInterface
{
    public function getItem(string $key): CacheItemInterface;

    public function save(CacheItemInterface $item): bool;
}
