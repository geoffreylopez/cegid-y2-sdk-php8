<?php

namespace Y2\Customer;

class GetCustomerDetail
{
    protected ?string $customerId = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(string $customerId, RetailContext $clientContext)
    {
        $this->customerId    = $customerId;
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
