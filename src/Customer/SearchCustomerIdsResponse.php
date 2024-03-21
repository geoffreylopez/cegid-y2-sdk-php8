<?php

namespace Y2\Customer;

class SearchCustomerIdsResponse
{
    protected ?ArrayOfCustomerQueryData $SearchCustomerIdsResult = null;

    public function __construct(ArrayOfCustomerQueryData $SearchCustomerIdsResult)
    {
        $this->SearchCustomerIdsResult = $SearchCustomerIdsResult;
    }

    public function getSearchCustomerIdsResult(): ?ArrayOfCustomerQueryData
    {
        return $this->SearchCustomerIdsResult;
    }

    public function setSearchCustomerIdsResult(ArrayOfCustomerQueryData $SearchCustomerIdsResult): static
    {
        $this->SearchCustomerIdsResult = $SearchCustomerIdsResult;
        return $this;
    }

}
