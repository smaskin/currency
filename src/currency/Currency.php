<?

namespace currency;

class Currency
{
    private $code;

    public function __construct(string $code)
    {
        if ($code === '') {
            throw new \InvalidArgumentException('Currency code should not be empty string');
        }

        // other validation here

        $this->code = $code;
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
