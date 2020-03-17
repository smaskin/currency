<?

namespace currency\db;

interface DbInterface
{
    public function findValueByCode(string $code): string;

    public function insertValue(string $code, string $result);
}
