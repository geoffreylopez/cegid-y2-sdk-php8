<?php

namespace Y2\SaleDocument;

class GetHeaderList_Request
{
    protected ?bool $Active = null;

    protected ?\DateTime $BeginDate = null;

    protected ?string $CustomerId = null;

    protected ?ArrayOfSaleDocumentType $DocumentTypes = null;

    protected ?\DateTime $EndDate = null;

    protected ?Pager $Pager = null;

    protected ?ArrayOfstring $StoreIds = null;

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

    public function getBeginDate(): \DateTime|bool|null
    {
      if ($this->BeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setBeginDate(\DateTime $BeginDate = null): static
    {
      if ($BeginDate == null) {
       $this->BeginDate = null;
      } else {
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
      }
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

    public function getDocumentTypes(): ?ArrayOfSaleDocumentType
    {
      return $this->DocumentTypes;
    }

    public function setDocumentTypes(ArrayOfSaleDocumentType $DocumentTypes): static
    {
      $this->DocumentTypes = $DocumentTypes;
      return $this;
    }

    public function getEndDate(): \DateTime|bool|null
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setEndDate(\DateTime $EndDate = null): static
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    public function getPager(): ?Pager
    {
      return $this->Pager;
    }

    public function setPager(Pager $Pager): static
    {
      $this->Pager = $Pager;
      return $this;
    }

    public function getStoreIds(): ?ArrayOfstring
    {
      return $this->StoreIds;
    }

    public function setStoreIds(ArrayOfstring $StoreIds): static
    {
      $this->StoreIds = $StoreIds;
      return $this;
    }

}
