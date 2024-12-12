<?php

namespace Minormous\Exception;

use DomainException;
use Minormous\Configuration\ConfigurationInterface;

class ConfigurationException extends DomainException
{
    /**
     * @param string|object $spec
     *
     * @return static
     */
    public static function invalidClass($spec)
    {
        if (is_object($spec)) {
            $spec = get_class($spec);
        }

        return new static(sprintf(
            'Configuration class `%s` must implement `%s`',
            $spec,
            ConfigurationInterface::class
        ));
    }
}
