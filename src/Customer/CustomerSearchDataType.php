<?php

namespace Y2\Customer;

class CustomerSearchDataType extends CustomerDataBase
{
    protected ?string $ActivityCode = null;

    protected ?string $Barcode = null;

    protected ?BirthDateDataType $BirthDateData = null;

    protected ?bool $Closed = null;

    protected ?string $CompanyIdNumber = null;

    protected ?string $CreationStoreId = null;

    protected ?string $CustomerId = null;

    protected ?string $CustomerReference = null;

    protected ?bool $DirectMail = null;

    protected ?string $FiscalId = null;

    protected ?string $InvoiceCustomerId = null;

    protected ?bool $IsCustomer = null;

    protected ?bool $IsProspect = null;

    protected ?string $ItalianFiscalId = null;

    protected ?int $MaxNumberOfCustomers = null;

    protected ?NationalityDataType $NationalityData = null;

    protected ?string $PassportNumber = null;


    public function __construct()
    {
        parent::__construct();
    }

    public function getActivityCode(): ?string
    {
        return $this->ActivityCode;
    }

    public function setActivityCode(?string $ActivityCode): static
    {
        $this->ActivityCode = $ActivityCode;
        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->Barcode;
    }

    public function setBarcode(?string $Barcode): static
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    public function getBirthDateData(): ?BirthDateDataType
    {
        return $this->BirthDateData;
    }

    public function setBirthDateData(?BirthDateDataType $BirthDateData): static
    {
        $this->BirthDateData = $BirthDateData;
        return $this;
    }

    public function getClosed(): ?bool
    {
        return $this->Closed;
    }

    public function setClosed(?bool $Closed): static
    {
        $this->Closed = $Closed;
        return $this;
    }

    public function getCompanyIdNumber(): ?string
    {
        return $this->CompanyIdNumber;
    }

    public function setCompanyIdNumber(?string $CompanyIdNumber): static
    {
        $this->CompanyIdNumber = $CompanyIdNumber;
        return $this;
    }

    public function getCreationStoreId(): ?string
    {
        return $this->CreationStoreId;
    }

    public function setCreationStoreId(?string $CreationStoreId): static
    {
        $this->CreationStoreId = $CreationStoreId;
        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->CustomerId;
    }

    public function setCustomerId(?string $CustomerId): static
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

    public function getCustomerReference(): ?string
    {
        return $this->CustomerReference;
    }

    public function setCustomerReference(?string $CustomerReference): static
    {
        $this->CustomerReference = $CustomerReference;
        return $this;
    }

    public function getDirectMail(): ?bool
    {
        return $this->DirectMail;
    }

    public function setDirectMail(?bool $DirectMail): static
    {
        $this->DirectMail = $DirectMail;
        return $this;
    }

    public function getFiscalId(): ?string
    {
        return $this->FiscalId;
    }

    public function setFiscalId(?string $FiscalId): static
    {
        $this->FiscalId = $FiscalId;
        return $this;
    }

    public function getInvoiceCustomerId(): ?string
    {
        return $this->InvoiceCustomerId;
    }

    public function setInvoiceCustomerId(?string $InvoiceCustomerId): static
    {
        $this->InvoiceCustomerId = $InvoiceCustomerId;
        return $this;
    }

    public function getIsCustomer(): ?bool
    {
        return $this->IsCustomer;
    }

    public function setIsCustomer(?bool $IsCustomer): static
    {
        $this->IsCustomer = $IsCustomer;
        return $this;
    }

    public function getIsProspect(): ?bool
    {
        return $this->IsProspect;
    }

    public function setIsProspect(?bool $IsProspect): static
    {
        $this->IsProspect = $IsProspect;
        return $this;
    }

    public function getItalianFiscalId(): ?string
    {
        return $this->ItalianFiscalId;
    }

    public function setItalianFiscalId(?string $ItalianFiscalId): static
    {
        $this->ItalianFiscalId = $ItalianFiscalId;
        return $this;
    }

    public function getMaxNumberOfCustomers(): ?int
    {
        return $this->MaxNumberOfCustomers;
    }

    public function setMaxNumberOfCustomers(?int $MaxNumberOfCustomers): static
    {
        $this->MaxNumberOfCustomers = $MaxNumberOfCustomers;
        return $this;
    }

    public function getNationalityData(): ?NationalityDataType
    {
        return $this->NationalityData;
    }

    public function setNationalityData(?NationalityDataType $NationalityData): static
    {
        $this->NationalityData = $NationalityData;
        return $this;
    }

    public function getPassportNumber(): ?string
    {
        return $this->PassportNumber;
    }

    public function setPassportNumber(?string $PassportNumber): static
    {
        $this->PassportNumber = $PassportNumber;
        return $this;
    }

}
