<?php

namespace Y2\Customer;

class CustomerData extends CustomerDataBase
{
    protected ?string $ActivityCode = null;

    protected ?string $Barcode = null;

    protected ?BirthDateDataType $BirthDateData = null;

    protected ?string $CompanyIdNumber = null;

    protected ?string $CompanyTitleId = null;

    protected ?string $CurrencyId = null;

    protected ?bool $DirectMail = null;

    protected ?string $FiscalId = null;

    protected ?string $ItalianFiscalId = null;

    protected ?string $LanguageId = null;

    protected ?string $LongDescription = null;

    protected ?string $NationalityId = null;

    protected ?string $OptinAlternativeEmail = null;

    protected ?string $OptinEmail = null;

    protected ?string $OptinHomePhone = null;

    protected ?string $OptinMobile = null;

    protected ?string $OptinOfficePhone = null;

    protected ?string $OptinPostal = null;

    protected ?string $PassportNumber = null;

    protected ?string $Sex = null;

    protected ?string $ShortName = null;

    protected ?ArrayOfUserField $UserFields = null;

    protected ?string $VATSystem = null;

    protected ?bool $ValidAlternativeEmail = null;

    protected ?bool $ValidEmail = null;

    protected ?bool $ValidHomePhone = null;

    protected ?bool $ValidMobile = null;

    protected ?bool $ValidOfficePhone = null;


    public function __construct()
    {
        parent::__construct();
    }

    public function getActivityCode(): ?string
    {
        return $this->ActivityCode;
    }

    public function setActivityCode(string $ActivityCode): static
    {
        $this->ActivityCode = $ActivityCode;
        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->Barcode;
    }

    public function setBarcode(string $Barcode): static
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    public function getBirthDateData(): ?BirthDateDataType
    {
        return $this->BirthDateData;
    }

    public function setBirthDateData(BirthDateDataType $BirthDateData): static
    {
        $this->BirthDateData = $BirthDateData;
        return $this;
    }

    public function getCompanyIdNumber(): ?string
    {
        return $this->CompanyIdNumber;
    }

    public function setCompanyIdNumber(string $CompanyIdNumber): static
    {
        $this->CompanyIdNumber = $CompanyIdNumber;
        return $this;
    }

    public function getCompanyTitleId(): ?string
    {
        return $this->CompanyTitleId;
    }

    public function setCompanyTitleId(string $CompanyTitleId): static
    {
        $this->CompanyTitleId = $CompanyTitleId;
        return $this;
    }

    public function getCurrencyId(): ?string
    {
        return $this->CurrencyId;
    }

    public function setCurrencyId(string $CurrencyId): static
    {
        $this->CurrencyId = $CurrencyId;
        return $this;
    }

    public function getDirectMail(): ?bool
    {
        return $this->DirectMail;
    }

    public function setDirectMail(bool $DirectMail): static
    {
        $this->DirectMail = $DirectMail;
        return $this;
    }

    public function getFiscalId(): ?string
    {
        return $this->FiscalId;
    }

    public function setFiscalId(string $FiscalId): static
    {
        $this->FiscalId = $FiscalId;
        return $this;
    }

    public function getItalianFiscalId(): ?string
    {
        return $this->ItalianFiscalId;
    }

    public function setItalianFiscalId(string $ItalianFiscalId): static
    {
        $this->ItalianFiscalId = $ItalianFiscalId;
        return $this;
    }

    public function getLanguageId(): ?string
    {
        return $this->LanguageId;
    }

    public function setLanguageId(string $LanguageId): static
    {
        $this->LanguageId = $LanguageId;
        return $this;
    }

    public function getLongDescription(): ?string
    {
        return $this->LongDescription;
    }

    public function setLongDescription(string $LongDescription): static
    {
        $this->LongDescription = $LongDescription;
        return $this;
    }

    public function getNationalityId(): ?string
    {
        return $this->NationalityId;
    }

    public function setNationalityId(string $NationalityId): static
    {
        $this->NationalityId = $NationalityId;
        return $this;
    }

    public function getOptinAlternativeEmail(): ?string
    {
        return $this->OptinAlternativeEmail;
    }

    public function setOptinAlternativeEmail(string $OptinAlternativeEmail): static
    {
        $this->OptinAlternativeEmail = $OptinAlternativeEmail;
        return $this;
    }

    public function getOptinEmail(): ?string
    {
        return $this->OptinEmail;
    }

    public function setOptinEmail(?string $OptinEmail): static
    {
        $this->OptinEmail = $OptinEmail;
        return $this;
    }

    public function getOptinHomePhone(): ?string
    {
        return $this->OptinHomePhone;
    }

    public function setOptinHomePhone(?string $OptinHomePhone): static
    {
        $this->OptinHomePhone = $OptinHomePhone;
        return $this;
    }

    public function getOptinMobile(): ?string
    {
        return $this->OptinMobile;
    }

    public function setOptinMobile(?string $OptinMobile): static
    {
        $this->OptinMobile = $OptinMobile;
        return $this;
    }

    public function getOptinOfficePhone(): ?string
    {
        return $this->OptinOfficePhone;
    }

    public function setOptinOfficePhone(?string $OptinOfficePhone): static
    {
        $this->OptinOfficePhone = $OptinOfficePhone;
        return $this;
    }

    public function getOptinPostal(): ?string
    {
        return $this->OptinPostal;
    }

    public function setOptinPostal(?string $OptinPostal): static
    {
        $this->OptinPostal = $OptinPostal;
        return $this;
    }

    public function getPassportNumber(): ?string
    {
        return $this->PassportNumber;
    }

    public function setPassportNumber(string $PassportNumber): static
    {
        $this->PassportNumber = $PassportNumber;
        return $this;
    }

    public function getSex(): ?string
    {
        return $this->Sex;
    }

    public function setSex(string $Sex): static
    {
        $this->Sex = $Sex;
        return $this;
    }

    public function getShortName(): ?string
    {
        return $this->ShortName;
    }

    public function setShortName(string $ShortName): static
    {
        $this->ShortName = $ShortName;
        return $this;
    }

    public function getUserFields(): ?ArrayOfUserField
    {
        return $this->UserFields;
    }

    public function setUserFields(ArrayOfUserField $UserFields): static
    {
        $this->UserFields = $UserFields;
        return $this;
    }

    public function getVATSystem(): ?string
    {
        return $this->VATSystem;
    }

    public function setVATSystem(string $VATSystem): static
    {
        $this->VATSystem = $VATSystem;
        return $this;
    }

    public function getValidAlternativeEmail(): ?bool
    {
        return $this->ValidAlternativeEmail;
    }

    public function setValidAlternativeEmail(bool $ValidAlternativeEmail): static
    {
        $this->ValidAlternativeEmail = $ValidAlternativeEmail;
        return $this;
    }

    public function getValidEmail(): ?bool
    {
        return $this->ValidEmail;
    }

    public function setValidEmail(bool $ValidEmail): static
    {
        $this->ValidEmail = $ValidEmail;
        return $this;
    }

    public function getValidHomePhone(): ?bool
    {
        return $this->ValidHomePhone;
    }

    public function setValidHomePhone(bool $ValidHomePhone): static
    {
        $this->ValidHomePhone = $ValidHomePhone;
        return $this;
    }

    public function getValidMobile(): ?bool
    {
        return $this->ValidMobile;
    }

    public function setValidMobile(bool $ValidMobile): static
    {
        $this->ValidMobile = $ValidMobile;
        return $this;
    }

    public function getValidOfficePhone(): ?bool
    {
        return $this->ValidOfficePhone;
    }

    public function setValidOfficePhone(bool $ValidOfficePhone): static
    {
        $this->ValidOfficePhone = $ValidOfficePhone;
        return $this;
    }

}
