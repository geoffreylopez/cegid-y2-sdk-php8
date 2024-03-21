<?php

namespace Y2\Customer;

class UserDefinedText
{
    protected ?string $Id = null;

    protected ?string $Value = null;

    public function __construct()
    {

    }

    public function getId(): ?string
    {
        return $this->Id;
    }

    public function setId(string $Id): static
    {
        $this->Id = $Id;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->Value;
    }

    public function setValue(string $Value): static
    {
        $this->Value = $Value;
        return $this;
    }

}
