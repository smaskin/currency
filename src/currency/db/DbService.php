<?

namespace currency\db;

class DbService implements DbInterface
{
    /**
     * @param string $code
     * @throws \RuntimeException
     * @return string
     */
    public function findValueByCode(string $code): string
    {
        // TODO: return value by code from db
    }

    /**
     * @param string $code
     * @param string $value
     * @throws \RuntimeException
     */
    public function insertValue(string $code, string $value)
    {
        // TODO: insert value to db
    }
}
