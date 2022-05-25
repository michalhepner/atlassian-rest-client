<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Util;

class ClassUtil
{
    /**
     * @param object|object[] $objectOrObjects
     * @param callable        $callback
     */
    public static function callSingleOrArray($objectOrObjects, callable $callback): void
    {
        if (is_array($objectOrObjects) || $objectOrObjects instanceof \Traversable) {
            foreach ($objectOrObjects as $object) {
                $callback($object);
            }
        } else {
            $callback($objectOrObjects);
        }
    }
}
