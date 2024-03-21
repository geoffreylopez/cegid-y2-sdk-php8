<?php

namespace Y2\Customer;

class CustomerQueryData extends CustomerData
{

    protected ?bool $Closed = null;

    protected ?string $CreationStoreId = null;

    protected ?string $CustomerId = null;

    protected ?string $InvoiceCustomerId = null;

    protected ?bool $IsProspect = null;

    protected ?bool $IsVirtual = null;

    protected \DateTime|string|null $LastDateUpdate = null;

    protected ?string $Notepad = null;


    public function __construct()
    {
        parent::__construct();
    }

    public function getClosed(): ?bool
    {
        return $this->Closed;
    }

    public function setClosed(bool $Closed): static
    {
        $this->Closed = $Closed;
        return $this;
    }

    public function getCreationStoreId(): ?string
    {
        return $this->CreationStoreId;
    }

    public function setCreationStoreId(string $CreationStoreId): static
    {
        $this->CreationStoreId = $CreationStoreId;
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

    public function getInvoiceCustomerId(): ?string
    {
        return $this->InvoiceCustomerId;
    }

    public function setInvoiceCustomerId(string $InvoiceCustomerId): static
    {
        $this->InvoiceCustomerId = $InvoiceCustomerId;
        return $this;
    }

    public function getIsProspect(): ?bool
    {
        return $this->IsProspect;
    }

    public function setIsProspect(bool $IsProspect): static
    {
        $this->IsProspect = $IsProspect;
        return $this;
    }

    public function getIsVirtual(): ?bool
    {
        return $this->IsVirtual;
    }

    public function setIsVirtual(bool $IsVirtual): static
    {
        $this->IsVirtual = $IsVirtual;
        return $this;
    }

    public function getLastDateUpdate(): \DateTime|bool|null
    {
        if ($this->LastDateUpdate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastDateUpdate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    public function setLastDateUpdate(\DateTime|string|null $LastDateUpdate = null): static
    {
        if ($LastDateUpdate == null) {
            $this->LastDateUpdate = null;
        } else {
            $this->LastDateUpdate = $LastDateUpdate->format(\DateTime::ATOM);
        }
        return $this;
    }

    public function getNotepad(): ?string
    {
        return $this->Notepad;
    }

    public function setNotepad(string $Notepad): static
    {
        $this->Notepad = $Notepad;
        return $this;
    }

}
