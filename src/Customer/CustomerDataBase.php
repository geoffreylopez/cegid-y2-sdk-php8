<?php

namespace Y2\Customer;

class CustomerDataBase
{
    protected ?string $ActivitySectorCode = null;

    protected ?AddressDataType $AddressData = null;

    protected ?string $AlternateFirstName = null;

    protected ?string $AlternateLastName = null;

    protected ?string $BusinessAreaCode = null;

    protected ?string $CpfCnpjCode = null;

    protected ?EmailDataType $EmailData = null;

    protected ?string $FirstName = null;

    protected ?bool $IsCompany = null;

    protected ?\DateTime $LastModificationDate = null;

    protected ?string $LastName = null;

    protected ?string $MunicipalRegistration = null;

    protected ?string $OriginCode = null;

    protected ?PhoneDataType $PhoneData = null;

    protected ?string $PriceListCode = null;

    protected ?string $RegionalRegistration = null;

    protected ?string $RiskLevel = null;

    protected ?string $SalesPerson2Id = null;

    protected ?string $SalesPerson3Id = null;

    protected ?string $SalesPersonId = null;

    protected ?string $TitleId = null;

    protected ?ArrayOfUserDefinedBoolean $UserDefinedBooleans = null;

    protected ?UserDefinedDataType $UserDefinedData = null;

    protected ?ArrayOfUserDefinedDate $UserDefinedDates = null;

    protected ?ArrayOfUserDefinedText $UserDefinedTexts = null;

    protected ?ArrayOfUserDefinedValue $UserDefinedValues = null;

    protected ?string $UsualStoreId = null;


    public function __construct()
    {

    }

    public function getActivitySectorCode(): ?string
    {
        return $this->ActivitySectorCode;
    }

    public function setActivitySectorCode(?string $ActivitySectorCode): static
    {
        $this->ActivitySectorCode = $ActivitySectorCode;
        return $this;
    }

    public function getAddressData(): ?AddressDataType
    {
        return $this->AddressData;
    }

    public function setAddressData(?AddressDataType $AddressData): static
    {
        $this->AddressData = $AddressData;
        return $this;
    }

    public function getAlternateFirstName(): ?string
    {
        return $this->AlternateFirstName;
    }

    public function setAlternateFirstName(?string $AlternateFirstName): static
    {
        $this->AlternateFirstName = $AlternateFirstName;
        return $this;
    }

    public function getAlternateLastName(): ?string
    {
        return $this->AlternateLastName;
    }

    public function setAlternateLastName(?string $AlternateLastName): static
    {
        $this->AlternateLastName = $AlternateLastName;
        return $this;
    }

    public function getBusinessAreaCode(): ?string
    {
        return $this->BusinessAreaCode;
    }

    public function setBusinessAreaCode(?string $BusinessAreaCode): static
    {
        $this->BusinessAreaCode = $BusinessAreaCode;
        return $this;
    }

    public function getCpfCnpjCode(): ?string
    {
        return $this->CpfCnpjCode;
    }

    public function setCpfCnpjCode(?string $CpfCnpjCode): static
    {
        $this->CpfCnpjCode = $CpfCnpjCode;
        return $this;
    }

    public function getEmailData(): ?EmailDataType
    {
        return $this->EmailData;
    }

    public function setEmailData(?EmailDataType $EmailData): static
    {
        $this->EmailData = $EmailData;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(?string $FirstName): static
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    public function getIsCompany(): ?bool
    {
        return $this->IsCompany;
    }

    public function setIsCompany(?bool $IsCompany): static
    {
        $this->IsCompany = $IsCompany;
        return $this;
    }

    public function getLastModificationDate(): \DateTime|bool|null
    {
        if ($this->LastModificationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastModificationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    public function setLastModificationDate(\DateTime|null $LastModificationDate = null): static
    {
        if ($LastModificationDate == null) {
            $this->LastModificationDate = null;
        } else {
            $this->LastModificationDate = $LastModificationDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(?string $LastName): static
    {
        $this->LastName = $LastName;
        return $this;
    }

    public function getMunicipalRegistration(): ?string
    {
        return $this->MunicipalRegistration;
    }

    public function setMunicipalRegistration(?string $MunicipalRegistration): static
    {
        $this->MunicipalRegistration = $MunicipalRegistration;
        return $this;
    }

    public function getOriginCode(): ?string
    {
        return $this->OriginCode;
    }

    public function setOriginCode(?string $OriginCode): static
    {
        $this->OriginCode = $OriginCode;
        return $this;
    }

    public function getPhoneData(): ?PhoneDataType
    {
        return $this->PhoneData;
    }

    public function setPhoneData(?PhoneDataType $PhoneData): static
    {
        $this->PhoneData = $PhoneData;
        return $this;
    }

    public function getPriceListCode(): ?string
    {
        return $this->PriceListCode;
    }

    public function setPriceListCode(?string $PriceListCode): static
    {
        $this->PriceListCode = $PriceListCode;
        return $this;
    }

    public function getRegionalRegistration(): ?string
    {
        return $this->RegionalRegistration;
    }

    public function setRegionalRegistration(?string $RegionalRegistration): static
    {
        $this->RegionalRegistration = $RegionalRegistration;
        return $this;
    }

    public function getRiskLevel(): ?string
    {
        return $this->RiskLevel;
    }

    public function setRiskLevel(?string $RiskLevel): static
    {
        $this->RiskLevel = $RiskLevel;
        return $this;
    }

    public function getSalesPerson2Id(): ?string
    {
        return $this->SalesPerson2Id;
    }

    public function setSalesPerson2Id(?string $SalesPerson2Id): static
    {
        $this->SalesPerson2Id = $SalesPerson2Id;
        return $this;
    }

    public function getSalesPerson3Id(): ?string
    {
        return $this->SalesPerson3Id;
    }

    public function setSalesPerson3Id(?string $SalesPerson3Id): static
    {
        $this->SalesPerson3Id = $SalesPerson3Id;
        return $this;
    }

    public function getSalesPersonId(): ?string
    {
        return $this->SalesPersonId;
    }

    public function setSalesPersonId(?string $SalesPersonId): static
    {
        $this->SalesPersonId = $SalesPersonId;
        return $this;
    }

    public function getTitleId(): ?string
    {
        return $this->TitleId;
    }

    public function setTitleId(?string $TitleId): static
    {
        $this->TitleId = $TitleId;
        return $this;
    }

    public function getUserDefinedBooleans(): ?ArrayOfUserDefinedBoolean
    {
        return $this->UserDefinedBooleans;
    }

    public function setUserDefinedBooleans(?ArrayOfUserDefinedBoolean $UserDefinedBooleans): static
    {
        $this->UserDefinedBooleans = $UserDefinedBooleans;
        return $this;
    }

    public function getUserDefinedData(): ?UserDefinedDataType
    {
        return $this->UserDefinedData;
    }

    public function setUserDefinedData(?UserDefinedDataType $UserDefinedData): static
    {
        $this->UserDefinedData = $UserDefinedData;
        return $this;
    }

    public function getUserDefinedDates(): ?ArrayOfUserDefinedDate
    {
        return $this->UserDefinedDates;
    }

    public function setUserDefinedDates(?ArrayOfUserDefinedDate $UserDefinedDates): static
    {
        $this->UserDefinedDates = $UserDefinedDates;
        return $this;
    }

    public function getUserDefinedTexts(): ?ArrayOfUserDefinedText
    {
        return $this->UserDefinedTexts;
    }

    public function setUserDefinedTexts(?ArrayOfUserDefinedText $UserDefinedTexts): static
    {
        $this->UserDefinedTexts = $UserDefinedTexts;
        return $this;
    }

    public function getUserDefinedValues(): ?ArrayOfUserDefinedValue
    {
        return $this->UserDefinedValues;
    }

    public function setUserDefinedValues(?ArrayOfUserDefinedValue $UserDefinedValues): static
    {
        $this->UserDefinedValues = $UserDefinedValues;
        return $this;
    }

    public function getUsualStoreId(): ?string
    {
        return $this->UsualStoreId;
    }

    public function setUsualStoreId(?string $UsualStoreId): static
    {
        $this->UsualStoreId = $UsualStoreId;
        return $this;
    }

}
