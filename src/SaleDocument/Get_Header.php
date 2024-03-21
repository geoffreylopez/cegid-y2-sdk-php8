<?php

namespace Y2\SaleDocument;

class Get_Header
{
    protected ?bool $Active = null;

    protected ?string $Comment = null;

    protected ?string $CurrencyId = null;

    protected ?string $CustomerId = null;

    protected ?\DateTime $Date = null;

    protected ?string $InternalReference = null;

    protected ?SaleDocumentKey $Key = null;

    protected ?OmniChannel $OmniChannel = null;

    protected ?DocumentOrigin $Origin = null;

    protected ?string $SalesPersonId = null;

    protected ?DocumentStatus $Status = null;

    protected ?string $StoreId = null;

    protected ?float $TaxExcludedTotalAmount = null;

    protected ?float $TaxIncludedTotalAmount = null;

    protected ?float $TotalQuantity = null;

    protected ?ArrayOfUserDefinedDate $UserDefinedDates = null;

    protected ?ArrayOfUserDefinedTable $UserDefinedTables = null;

    protected ?ArrayOfUserField $UserFields = null;

    protected ?string $WarehouseId = null;

    public function __construct()
    {
    
    }

    public function getActive(): ?bool
    {
      return $this->Active;
    }

    public function setActive(bool $Active): static
    {
      $this->Active = $Active;
      return $this;
    }

    public function getComment(): ?string
    {
      return $this->Comment;
    }

    public function setComment(string $Comment): static
    {
      $this->Comment = $Comment;
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

    public function getCustomerId(): ?string
    {
      return $this->CustomerId;
    }

    public function setCustomerId(string $CustomerId): static
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    public function getDate(): \DateTime|bool|null
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setDate(\DateTime $Date = null): static
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
      return $this;
    }

    public function getInternalReference(): ?string
    {
      return $this->InternalReference;
    }

    public function setInternalReference(string $InternalReference): static
    {
      $this->InternalReference = $InternalReference;
      return $this;
    }

    public function getKey(): ?SaleDocumentKey
    {
      return $this->Key;
    }

    public function setKey(SaleDocumentKey $Key): static
    {
      $this->Key = $Key;
      return $this;
    }

    public function getOmniChannel(): ?OmniChannel
    {
      return $this->OmniChannel;
    }

    /**
     * @param OmniChannel $OmniChannel
     * @return Get_Header
     */
    public function setOmniChannel(OmniChannel $OmniChannel): static
    {
      $this->OmniChannel = $OmniChannel;
      return $this;
    }

    public function getOrigin(): ?DocumentOrigin
    {
      return $this->Origin;
    }

    public function setOrigin(DocumentOrigin $Origin): static
    {
      $this->Origin = $Origin;
      return $this;
    }

    public function getSalesPersonId(): ?string
    {
      return $this->SalesPersonId;
    }

    public function setSalesPersonId(string $SalesPersonId): static
    {
      $this->SalesPersonId = $SalesPersonId;
      return $this;
    }

    public function getStatus(): ?DocumentStatus
    {
      return $this->Status;
    }

    public function setStatus(DocumentStatus $Status): static
    {
      $this->Status = $Status;
      return $this;
    }

    public function getStoreId(): ?string
    {
      return $this->StoreId;
    }

    public function setStoreId(string $StoreId): static
    {
      $this->StoreId = $StoreId;
      return $this;
    }

    public function getTaxExcludedTotalAmount(): ?float
    {
      return $this->TaxExcludedTotalAmount;
    }

    public function setTaxExcludedTotalAmount(float $TaxExcludedTotalAmount): static
    {
      $this->TaxExcludedTotalAmount = $TaxExcludedTotalAmount;
      return $this;
    }

    public function getTaxIncludedTotalAmount(): ?float
    {
      return $this->TaxIncludedTotalAmount;
    }

    public function setTaxIncludedTotalAmount(float $TaxIncludedTotalAmount): static
    {
      $this->TaxIncludedTotalAmount = $TaxIncludedTotalAmount;
      return $this;
    }

    public function getTotalQuantity(): ?float
    {
      return $this->TotalQuantity;
    }

    public function setTotalQuantity(float $TotalQuantity): static
    {
      $this->TotalQuantity = $TotalQuantity;
      return $this;
    }

    public function getUserDefinedDates(): ?ArrayOfUserDefinedDate
    {
      return $this->UserDefinedDates;
    }

    public function setUserDefinedDates(ArrayOfUserDefinedDate $UserDefinedDates): static
    {
      $this->UserDefinedDates = $UserDefinedDates;
      return $this;
    }

    public function getUserDefinedTables(): ?ArrayOfUserDefinedTable
    {
      return $this->UserDefinedTables;
    }

    public function setUserDefinedTables(ArrayOfUserDefinedTable $UserDefinedTables): static
    {
      $this->UserDefinedTables = $UserDefinedTables;
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

    public function getWarehouseId(): ?string
    {
      return $this->WarehouseId;
    }

    public function setWarehouseId(string $WarehouseId): static
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
