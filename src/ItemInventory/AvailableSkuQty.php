<?php

namespace Y2\ItemInventory;

class AvailableSkuQty
{
    protected ?float $AvailableQty = null;

    protected ?string $Dimension1 = null;

    protected ?string $Dimension2 = null;

    protected ?string $Dimension3 = null;

    protected ?string $Dimension4 = null;

    protected ?string $Dimension5 = null;

    public function __construct()
    {

    }

    public function getAvailableQty(): ?float
    {
        return $this->AvailableQty;
    }

    public function setAvailableQty(float $AvailableQty): static
    {
        $this->AvailableQty = $AvailableQty;
        return $this;
    }

    public function getDimension1(): ?string
    {
        return $this->Dimension1;
    }

    public function setDimension1(string $Dimension1): static
    {
        $this->Dimension1 = $Dimension1;
        return $this;
    }

    public function getDimension2(): ?string
    {
        return $this->Dimension2;
    }

    public function setDimension2(string $Dimension2): static
    {
        $this->Dimension2 = $Dimension2;
        return $this;
    }

    public function getDimension3(): ?string
    {
        return $this->Dimension3;
    }

    public function setDimension3(string $Dimension3): static
    {
        $this->Dimension3 = $Dimension3;
        return $this;
    }

    public function getDimension4(): ?string
    {
        return $this->Dimension4;
    }

    public function setDimension4(string $Dimension4): static
    {
        $this->Dimension4 = $Dimension4;
        return $this;
    }

    public function getDimension5(): ?string
    {
        return $this->Dimension5;
    }

    public function setDimension5($Dimension5): static
    {
        $this->Dimension5 = $Dimension5;
        return $this;
    }

}
