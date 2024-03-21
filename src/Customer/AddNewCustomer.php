<?php

namespace Y2\Customer;

class AddNewCustomer
{
    protected ?CustomerInsertData $customerData = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(CustomerInsertData $customerData, RetailContext $clientContext)
    {
        $this->customerData  = $customerData;
        $this->clientContext = $clientContext;
    }

    public function getCustomerData(): ?CustomerInsertData
    {
        return $this->customerData;
    }

    public function setCustomerData(CustomerInsertData $customerData): static
    {
        $this->customerData = $customerData;
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
