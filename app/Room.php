<?php

namespace App;

use Exception;

class Room
{

    private int $count = 0;

    /**
     * @throws Exception
     */
    public function __construct(
        private string $type,
        int $count
    )
    {
        match ($this->type) {
            'single' => $this->single($count),
            'semi-double' => $this->semiDouble($count),
            'double' => $this->double($count),
            'sweet-room' => $this->sweetRoom($count),
            default => throw new Exception(),
        };

        $this->count = $count;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @throws Exception
     */
    private function single(int $count)
    {
        if ($count === 0 || $count > 1)
            throw new Exception();
    }

    /**
     * @throws Exception
     */
    private function semiDouble(int $count)
    {
        if ($count === 0 || $count > 2)
            throw new Exception();
    }

    /**
     * @throws Exception
     */
    private function double(int $count) {
        if ($count === 0 || $count > 2)
            throw new Exception();
    }

    /**
     * @throws Exception
     */
    private function sweetRoom(int $count) {
        if ($count === 0 || $count > 4)
            throw new Exception();
    }
}
