<?

namespace currency;

interface CurrencyProviderInterface
{
    public function getValue(Currency $currency): string;
}