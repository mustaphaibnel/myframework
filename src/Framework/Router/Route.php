<?php
namespace Framework\Router;
class Route{

    /**
     * @var string
     */
    private $name;
    /**
     * @var callable
     */
    private $callback;
    /**
     * @var array
     */
    private $parameters;

    public function __construct(string $name, callable $callback, array $parameters)
    {
        $this->name = $name;
        $this->callback = $callback;
        $this->parameters = $parameters;
    }

    /**
     * @return callable
     */
    public function getCallback():callable
    {
        return $this->callback;
    }

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getParameters() :array
    {
        return $this->parameters;
    }

    /**
     * @return string
     */

















}