<?php

namespace Y2\Customer;

class HelloWorldResponse
{
    protected ?string $HelloWorldResult = null;

    public function __construct(string $HelloWorldResult)
    {
        $this->HelloWorldResult = $HelloWorldResult;
    }

    public function getHelloWorldResult(): ?string
    {
        return $this->HelloWorldResult;
    }

    public function setHelloWorldResult(string $HelloWorldResult): static
    {
        $this->HelloWorldResult = $HelloWorldResult;
        return $this;
    }

}
