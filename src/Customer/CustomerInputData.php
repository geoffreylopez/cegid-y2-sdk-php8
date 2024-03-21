<?php

namespace Y2\Customer;

class CustomerInputData extends CustomerData
{
    protected ?bool $Closed = null;

    protected ?string $InvoiceCustomerId = null;

    protected ?bool $IsProspect = null;

    protected ?string $Notepad = null;

    public function __construct()
    {
        parent::__construct();
    }

    public function getClosed(): ?bool
    {
        return $this->Closed;
    }

    public function setClosed($Closed): static
    {
        $this->Closed = $Closed;
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
