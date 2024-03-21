<?php

namespace Y2\Customer;

class UpdateCustomer
{
    protected ?string $customerId = null;

    protected ?CustomerInputData $modifiedData = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(string $customerId, CustomerInputData $modifiedData, RetailContext $clientContext)
    {
        $this->customerId    = $customerId;
        $this->modifiedData  = $modifiedData;
        $this->clientContext = $clientContext;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(string $customerId): static
    {
        $this->customerId = $customerId;
        return $this;
    }

    public function getModifiedData(): ?CustomerInputData
    {
        return $this->modifiedData;
    }

    public function setModifiedData(CustomerInputData $modifiedData): static
    {
        $this->modifiedData = $modifiedData;
        return $this;
    }

    public function getClientContext(): ?RetailContext
    {
        return $this->clientContext;
    }

    public function setClientContext(RetailContext $clientContext): static
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
