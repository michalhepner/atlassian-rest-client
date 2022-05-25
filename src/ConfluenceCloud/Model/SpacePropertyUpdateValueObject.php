<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpacePropertyUpdateValueObject
{
    protected $__customAttributes = [];

    public function __call($name, $arguments)
    {
        if (preg_match('/^(get|set){1}(.+)/', $name, $matches)) {
            if ($matches[1] == 'get') {
                return $this->__customAttributes[$matches[2]];
            } else {
                $this->__customAttributes[$matches[2]] = $arguments[0];
                
                return $this;
            }
        } else {
            throw new \BadMethodCallException(sprintf('Unknown method %s::%s', self::class, $name));
        }
    }
}
