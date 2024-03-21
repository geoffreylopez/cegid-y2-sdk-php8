<?php

namespace Y2\SaleDocument;

class UserDefinedTableCustomer
{
    protected ?UserDefinedTableCustomerId $Id = null;

    protected ?string $Value = null;

    public function __construct()
    {
    
    }

    public function getId(): ?UserDefinedTableCustomerId
    {
      return $this->Id;
    }

    public function setId(UserDefinedTableCustomerId $Id): static
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
