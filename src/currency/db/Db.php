<?

namespace currency\db;

use currency\Currency;
use currency\CurrencyProviderInterface;

class Db implements CurrencyProviderInterface
{
    private $db;
    private $currencyProvider;

    public function __construct(CurrencyProviderInterface $currencyProvider, DbInterface $db)
    {
        $this->db = $db;
        $this->currencyProvider = $currencyProvider;
    }

    public function getValue(Currency $currency): string
    {
        $code = $currency->getCode();

        if ($value = $this->db->findValueByCode($code)) {
            return $value;
        }

        $result = $this->currencyProvider->getValue($currency);

        $this->db->insertValue($code, $result);

        return $result;
    }
}
