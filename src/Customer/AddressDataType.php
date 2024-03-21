<?php

namespace Y2\Customer;

class AddressDataType
{
    protected ?string $AddressLine1 = null;

    protected ?string $AddressLine2 = null;

    protected ?string $AddressLine3 = null;

    protected ?string $BrandName = null;

    protected ?string $City = null;

    protected ?string $CountryId = null;

    protected CountryIdType|string|null $CountryIdType = null;

    protected ?bool $Nata = null;

    protected ?string $RegionId = null;

    protected ?string $ZipCode = null;

    public function __construct()
    {

    }

    public function getAddressLine1(): ?string
    {
        return $this->AddressLine1;
    }

    public function setAddressLine1(string $AddressLine1): static
    {
        $this->AddressLine1 = $AddressLine1;
        return $this;
    }

    public function getAddressLine2(): ?string
    {
        return $this->AddressLine2;
    }

    public function setAddressLine2(string $AddressLine2): static
    {
        $this->AddressLine2 = $AddressLine2;
        return $this;
    }

    public function getAddressLine3(): ?string
    {
        return $this->AddressLine3;
    }

    public function setAddressLine3(string $AddressLine3): static
    {
        $this->AddressLine3 = $AddressLine3;
        return $this;
    }

    public function getBrandName(): ?string
    {
        return $this->BrandName;
    }

    public function setBrandName(?string $BrandName): static
    {
        $this->BrandName = $BrandName;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(string $City): static
    {
        $this->City = $City;
        return $this;
    }

    public function getCountryId(): ?string
    {
        return $this->CountryId;
    }

    public function setCountryId(string $CountryId): static
    {
        $this->CountryId = $CountryId;
        return $this;
    }

    public function getCountryIdType(): ?CountryIdType
    {
        return $this->CountryIdType;
    }

    public function setCountryIdType(string|CountryIdType $CountryIdType): static
    {
        $this->CountryIdType = $CountryIdType;
        return $this;
    }

    public function getNata(): ?bool
    {
        return $this->Nata;
    }

    public function setNata(bool $Nata): static
    {
        $this->Nata = $Nata;
        return $this;
    }

    public function getRegionId(): ?string
    {
        return $this->RegionId;
    }

    public function setRegionId(string $RegionId): static
    {
        $this->RegionId = $RegionId;
        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->ZipCode;
    }

    public function setZipCode(string $ZipCode): static
    {
        $this->ZipCode = $ZipCode;
        return $this;
    }

}
