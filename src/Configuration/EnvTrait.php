<?php

namespace Minormous\Configuration;

use Minormous\Env;

trait EnvTrait
{
    /**
     * @var Env
     */
    private $env;

    /**
     * @param Env $env
     */
    public function __construct(Env $env)
    {
        $this->env = $env;
    }
}
