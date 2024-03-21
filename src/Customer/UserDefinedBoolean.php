<?php

namespace Y2\Customer;

class UserDefinedBoolean
{
    protected ?string $Id = null;

    protected ?bool $Value = null;

    public function __construct()
    {

    }

    public function getId(): ?string
    {
        return $this->Id;
    }

    public function setId(?string $Id): static
    {
        $this->Id = $Id;
        return $this;
    }

    public function getValue(): ?bool
    {
        return $this->Value;
    }

    public function setValue(bool $Value): static
    {
        $this->Value = $Value;
        return $this;
    }

}
