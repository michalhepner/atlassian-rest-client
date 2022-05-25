<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Factory;

use MichalHepner\AtlassianRestClient\Exception\ModelFactoryException;

class ModelFactory implements ModelFactoryInterface
{
    /**
     * @var ModelFactoryInterface[]
     */
    protected $factories = [];

    /**
     * @param string $type
     * @param mixed  $data
     *
     * @return bool
     */
    public function canCreate(string $type, $data): bool
    {
        foreach ($this->factories as $factory) {
            if ($factory->canCreate($type, $data)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param string $type
     * @param mixed  $data
     *
     * @return mixed
     */
    public function create(string $type, $data)
    {
        foreach ($this->factories as $factory) {
            if ($factory->canCreate($type, $data)) {
                return $factory->create($type, $data);
            }
        }

        throw new ModelFactoryException(sprintf('Cannot create model of type %s', $type));
    }

    public function add(ModelFactoryInterface $modelFactory): ModelFactory
    {
        $this->factories[] = $modelFactory;

        return $this;
    }
}
