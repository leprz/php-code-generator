<?php

declare(strict_types=1);

namespace Leprz\Boilerplate\PathNode\Php;

use Leprz\Boilerplate\PathNode\File;

/**
 * @package Leprz\Boilerplate\PathNode\Php
 */
class PhpFile extends File
{
    /**
     * @var \Leprz\Boilerplate\PathNode\Php\PhpMethod[]
     */
    private array $methods = [];

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name, 'php');
    }

    /**
     * @param \Leprz\Boilerplate\PathNode\Php\PhpMethod $method
     * @return \Leprz\Boilerplate\PathNode\Php\PhpFile
     * @codeCoverageIgnore
     */
    public function addMethod(PhpMethod $method): self
    {
        $this->methods[] = $method;

        return $this;
    }

    /**
     * @return \Leprz\Boilerplate\PathNode\Php\PhpMethod[]
     * @codeCoverageIgnore
     */
    public function getMethods(): array
    {
        return $this->methods;
    }
}
