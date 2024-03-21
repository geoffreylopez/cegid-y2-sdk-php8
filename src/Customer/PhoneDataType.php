<?php

namespace Y2\Customer;

class PhoneDataType
{
    protected ?string $AlternativePhoneNumber = null;

    protected ?string $CellularPhoneNumber = null;

    protected ?string $HomePhoneNumber = null;

    protected ?string $OfficePhoneNumber = null;

    public function __construct()
    {

    }

    public function getAlternativePhoneNumber(): ?string
    {
        return $this->AlternativePhoneNumber;
    }

    public function setAlternativePhoneNumber($AlternativePhoneNumber): static
    {
        $this->AlternativePhoneNumber = $AlternativePhoneNumber;
        return $this;
    }

    public function getCellularPhoneNumber(): ?string
    {
        return $this->CellularPhoneNumber;
    }

    public function setCellularPhoneNumber(string $CellularPhoneNumber): static
    {
        $this->CellularPhoneNumber = $CellularPhoneNumber;
        return $this;
    }

    public function getHomePhoneNumber(): ?string
    {
        return $this->HomePhoneNumber;
    }

    public function setHomePhoneNumber(string $HomePhoneNumber): static
    {
        $this->HomePhoneNumber = $HomePhoneNumber;
        return $this;
    }

    public function getOfficePhoneNumber(): ?string
    {
        return $this->OfficePhoneNumber;
    }

    public function setOfficePhoneNumber(string $OfficePhoneNumber): static
    {
        $this->OfficePhoneNumber = $OfficePhoneNumber;
        return $this;
    }

}
