<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Factory;

class SimpleFactory implements ModelFactoryInterface
{
    /**
     * @param string $type
     * @param mixed  $data
     *
     * @return bool
     */
    public function canCreate(string $type, $data): bool
    {
        return in_array($type, ['array', 'string', 'bool', 'int', 'float', 'integer', 'double', 'boolean']);
    }

    /**
     * @param string $type
     * @param mixed  $data
     *
     * @return mixed
     */
    public function create(string $type, $data)
    {
        return $data;
    }
}
