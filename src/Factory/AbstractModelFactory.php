<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Factory;

use MichalHepner\AtlassianRestClient\Annotation\AnnotationReader;
use MichalHepner\AtlassianRestClient\Exception\ModelFactoryException;

abstract class AbstractModelFactory implements ModelFactoryInterface
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
        $bean = new $class();

        foreach ($data as $property => $value) {
            if (property_exists($this->getCreatedClass(), $property)) {
                $type = $this->annotationReader->getPropertyType($this->getCreatedClass(), $property);
                if ($type === null) {
                    throw new ModelFactoryException(sprintf('%s::%s has no @var annotation defined', $this->getCreatedClass(), $property));
                }

                $bean->{'set'.ucfirst($property)}($this->modelFactory->create($type, $value));
            } elseif (method_exists($this->getCreatedClass(), '__call')) {
                $bean->{'set'.ucfirst($property)}($this->modelFactory->create(gettype($value), $value));
            }
        }

        return $bean;
    }

    public function canCreate(string $type, $data): bool
    {
        return $type === $this->getCreatedClass();
    }

    abstract protected function getCreatedClass(): string;
}
