<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Factory;

use MichalHepner\AtlassianRestClient\Annotation\AnnotationReader;

abstract class AbstractCollectionFactory implements ModelFactoryInterface
{
    /**
     * @var AnnotationReader
     */
    protected $annotationReader;

    /**
     * @var ModelFactory
     */
    protected $modelFactory;

    public function __construct(AnnotationReader $annotationReader, ModelFactory $modelFactory)
    {
        $this->annotationReader = $annotationReader;
        $this->modelFactory = $modelFactory;
    }

    public function create(string $type, $data)
    {
        $class = $this->getCreatedClass();
        $ret = new $class();

        foreach ($data as $item) {
            $ret->add($this->modelFactory->create($this->getItemClass(), $item));
        }

        return $ret;
    }

    public function canCreate(string $type, $data): bool
    {
        return $type === $this->getCreatedClass();
    }

    abstract protected function getCreatedClass(): string;
    abstract protected function getItemClass(): string;
}
