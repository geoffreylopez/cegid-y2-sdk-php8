<?php

namespace Y2\Customer;

class UserDefinedValue
{

    protected ?UserDefinedId $Id = null;

    protected ?float $Value = null;

    public function __construct()
    {

    }

    public function getId(): ?UserDefinedId
    {
        return $this->Id;
    }

    public function setId(UserDefinedId $Id): static
    {
        $this->Id = $Id;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->Value;
    }

    public function setValue(float $Value): static
    {
        $this->Value = $Value;
        return $this;
    }

}
