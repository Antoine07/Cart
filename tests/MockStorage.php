<?php

namespace Tests;

class MockStorage  implements \iStorage
{
    private $storage = [];

    public function __construct()
    {
        if(!isset($this->storage['storage']))
            $this->storage['storage'] = [];
    }

    public function setValue(string $name, $value): void
    {
        if (empty($this->storage['storage'][$name]))
            $this->storage['storage'][$name] = 0;

        $this->storage['storage'][$name] += $value;
    }

    function restore(string $name): void
    {
        // TODO: Implement restore() method.
    }

    function reset(): void
    {
        // TODO: Implement reset() method.
    }

    function total(): float
    {
        return array_sum($this->storage['storage']);
    }
}