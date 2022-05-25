<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Annotation;

use ReflectionProperty;

class AnnotationReader
{
    /**
     * @var array
     */
    protected $cache = [];

    public function getPropertyType(string $class, string $property): ?string
    {
        if (!array_key_exists($class, $this->cache) || !array_key_exists($property, $this->cache[$class])) {
            $reflectionProperty = new ReflectionProperty($class, $property);
            $this->cache[$class][$property] = $this->getVarAnnotation($reflectionProperty->getDocComment(), $reflectionProperty->getDeclaringClass()->getNamespaceName());
        }

        return $this->cache[$class][$property];
    }

    protected function getVarAnnotation(string $docComment, string $namespace): ?string
    {
        $lines = explode(PHP_EOL, $docComment);
        foreach ($lines as $line) {
            if (preg_match('/@var ([\\\A-Za-z0-9]+){1}(\[\]){0,1}/', $line, $matches)) {
                $match = $matches[1];

                $arrayOf = isset($matches[2]) && $matches[2] === '[]' ? '[]' : '';

                if (preg_match('/^[\\\]{1}/', $match)) {
                    $match = preg_replace('/^[\\\]{1}/', '', $match);
                } elseif (!in_array(strtolower($match), ['string', 'int', 'integer', 'float', 'double', 'bool', 'boolean', 'array', 'object', 'null', 'resource'])) {
                    $match = preg_replace('/^[\\\]+/', '', $namespace.'\\'.$match);
                }

                return $match.$arrayOf;
            }
        }

        return null;
    }
}
