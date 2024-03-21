<?php

namespace Y2\Customer;

class NationalityDataType
{
    protected ?string $ISO2 = null;

    protected ?string $ISO3 = null;

    protected ?string $ISO3Num = null;

    protected ?string $Id = null;

    protected ?string $Label = null;

    public function __construct()
    {

    }

    public function getISO2(): ?string
    {
        return $this->ISO2;
    }

    public function setISO2(string $ISO2): static
    {
        $this->ISO2 = $ISO2;
        return $this;
    }

    public function getISO3(): ?string
    {
        return $this->ISO3;
    }

    public function setISO3(string $ISO3): static
    {
        $this->ISO3 = $ISO3;
        return $this;
    }

    public function getISO3Num(): ?string
    {
        return $this->ISO3Num;
    }

    public function setISO3Num(string $ISO3Num): static
    {
        $this->ISO3Num = $ISO3Num;
        return $this;
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

    public function getLabel(): ?string
    {
        return $this->Label;
    }

    public function setLabel(string $Label): static
    {
        $this->Label = $Label;
        return $this;
    }

}
