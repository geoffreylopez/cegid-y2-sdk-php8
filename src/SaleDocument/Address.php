<?php

namespace Y2\SaleDocument;

class Address
{
    protected ?string $City = null;

    protected ?int $ContactNumber = null;

    protected ?string $CountryId = null;

    protected ?CountryIdType $CountryIdType = null;

    protected ?string $FirstName = null;

    protected ?string $LastName = null;

    protected ?string $Line1 = null;

    protected ?string $Line2 = null;

    protected ?string $Line3 = null;

    protected ?string $PhoneNumber = null;

    protected ?string $Region = null;

    protected ?string $TitleId = null;

    protected ?string $ZipCode = null;

    
    public function __construct()
    {
    
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

    public function getContactNumber(): ?int
    {
      return $this->ContactNumber;
    }

    public function setContactNumber(int $ContactNumber): static
    {
      $this->ContactNumber = $ContactNumber;
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

    public function getCountryIdType(): string|CountryIdType|null
    {
      return $this->CountryIdType;
    }

    public function setCountryIdType(string $CountryIdType): static
    {
      $this->CountryIdType = $CountryIdType;
      return $this;
    }

    public function getFirstName(): ?string
    {
      return $this->FirstName;
    }

    public function setFirstName(string $FirstName): static
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    public function getLastName(): ?string
    {
      return $this->LastName;
    }

    public function setLastName(string $LastName): static
    {
      $this->LastName = $LastName;
      return $this;
    }

    public function getLine1(): ?string
    {
      return $this->Line1;
    }

    public function setLine1(string $Line1): static
    {
      $this->Line1 = $Line1;
      return $this;
    }

    public function getLine2(): ?string
    {
      return $this->Line2;
    }

    public function setLine2(string $Line2): static
    {
      $this->Line2 = $Line2;
      return $this;
    }

    public function getLine3(): ?string
    {
      return $this->Line3;
    }

    public function setLine3($Line3): static
    {
      $this->Line3 = $Line3;
      return $this;
    }

    public function getPhoneNumber(): ?string
    {
      return $this->PhoneNumber;
    }

    public function setPhoneNumber(string $PhoneNumber): static
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    public function getRegion(): ?string
    {
      return $this->Region;
    }

    public function setRegion(string $Region): static
    {
      $this->Region = $Region;
      return $this;
    }

    public function getTitleId(): ?string
    {
      return $this->TitleId;
    }

    public function setTitleId(string $TitleId): static
    {
      $this->TitleId = $TitleId;
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
