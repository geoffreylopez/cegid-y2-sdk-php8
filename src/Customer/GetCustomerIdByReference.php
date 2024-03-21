<?php

namespace Y2\Customer;

class GetCustomerIdByReference
{
    protected ?string $customerReference = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(string $customerReference, RetailContext $clientContext)
    {
        $this->customerReference = $customerReference;
        $this->clientContext     = $clientContext;
    }

    public function getCustomerReference(): ?string
    {
        return $this->customerReference;
    }

    public function setCustomerReference(string $customerReference): static
    {
        $this->customerReference = $customerReference;
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
