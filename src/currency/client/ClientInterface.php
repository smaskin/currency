<?

namespace currency\client;

interface ClientInterface
{
    public function getValueByCode(string $code): string;
}
