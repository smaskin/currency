<?

namespace currency\client;

class ClientService implements ClientInterface
{
    /**
     * @param string $code
     * @throws \RuntimeException
     * @return string
     */
    public function getValueByCode(string $code): string
    {
        // TODO: return value by currency from http client
    }
}
