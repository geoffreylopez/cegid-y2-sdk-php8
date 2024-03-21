<?php

namespace Y2\Customer;

class UserDefinedBoolean
{
    protected ?UserDefinedId $Id = null;

    protected ?bool $Value = null;

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
