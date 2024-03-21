<?php

namespace Y2\SaleDocument;

class UserDefinedDate
{
    protected ?UserDefinedId $Id = null;

    protected ?\DateTime $Value = null;

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

    public function getValue(): \DateTime|bool|null
    {
      if ($this->Value == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Value);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setValue(\DateTime $Value = null): static
    {
      if ($Value == null) {
       $this->Value = null;
      } else {
        $this->Value = $Value->format(\DateTime::ATOM);
      }
      return $this;
    }

}
