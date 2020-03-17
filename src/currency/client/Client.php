<?

namespace currency\client;

use currency\Currency;
use currency\CurrencyProviderInterface;

class Client implements CurrencyProviderInterface
{
    private $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function getValue(Currency $currency): string
    {
        return $this->client->getValueByCode($currency->getCode());
    }
}
