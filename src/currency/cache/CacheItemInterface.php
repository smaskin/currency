<?

namespace currency\cache;

interface CacheItemInterface
{
    public function get();

    public function isHit(): bool;

    public function set($value);
}
