<?php

namespace Y2\SaleDocument;

class UserField
{
    protected ?bool $BooleanValue = null;

    protected ?\DateTime $DateValue = null;

    protected ?int $Id = null;

    protected ?string $ListElementValue = null;

    protected ?float $NumberValue = null;

    protected ?string $TextValue = null;

    protected ?UserFieldKind $ValueType = null;

    public function __construct()
    {
    
    }

    public function getBooleanValue(): ?bool
    {
      return $this->BooleanValue;
    }

    public function setBooleanValue(bool $BooleanValue): static
    {
      $this->BooleanValue = $BooleanValue;
      return $this;
    }

    public function getDateValue(): \DateTime|bool|null
    {
      if ($this->DateValue == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateValue);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setDateValue(\DateTime $DateValue = null): static
    {
      if ($DateValue == null) {
       $this->DateValue = null;
      } else {
        $this->DateValue = $DateValue->format(\DateTime::ATOM);
      }
      return $this;
    }

    public function getId(): ?int
    {
      return $this->Id;
    }

    public function setId(int $Id): static
    {
      $this->Id = $Id;
      return $this;
    }

    public function getListElementValue(): ?string
    {
      return $this->ListElementValue;
    }

    public function setListElementValue(string $ListElementValue): static
    {
      $this->ListElementValue = $ListElementValue;
      return $this;
    }

    public function getNumberValue(): ?float
    {
      return $this->NumberValue;
    }

    public function setNumberValue(float $NumberValue): static
    {
      $this->NumberValue = $NumberValue;
      return $this;
    }

    public function getTextValue(): ?string
    {
      return $this->TextValue;
    }

    public function setTextValue(string $TextValue): static
    {
      $this->TextValue = $TextValue;
      return $this;
    }

    public function getValueType(): ?UserFieldKind
    {
      return $this->ValueType;
    }

    public function setValueType(UserFieldKind $ValueType): static
    {
      $this->ValueType = $ValueType;
      return $this;
    }

}
