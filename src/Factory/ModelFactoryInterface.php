<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Factory;

interface ModelFactoryInterface
{
    /**
     * @param string $type
     * @param mixed  $data
     *
     * @return bool
     */
    public function canCreate(string $type, $data): bool;

    /**
     * @param string $type
     * @param mixed  $data
     *
     * @return mixed
     */
    public function create(string $type, $data);
}
