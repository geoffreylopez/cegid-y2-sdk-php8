<?php

namespace Y2\Customer;

class SearchCustomerIds
{
    protected ?CustomerSearchDataType $searchData = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(CustomerSearchDataType $searchData, RetailContext $clientContext)
    {
        $this->searchData    = $searchData;
        $this->clientContext = $clientContext;
    }

    public function getSearchData(): ?CustomerSearchDataType
    {
        return $this->searchData;
    }

    public function setSearchData(CustomerSearchDataType $searchData): static
    {
        $this->searchData = $searchData;
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
