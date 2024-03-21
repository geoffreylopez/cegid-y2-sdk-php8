<?php

namespace Y2\SaleDocument;

class UserDefinedTable
{
    protected ?UserDefinedId $Id = null;

    protected ?string $Value = null;

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
