<?php

namespace Y2\Customer;

class GetCustomerDetailResponse
{
    protected ?CustomerQueryData $GetCustomerDetailResult = null;

    public function __construct(CustomerQueryData $GetCustomerDetailResult)
    {
        $this->GetCustomerDetailResult = $GetCustomerDetailResult;
    }

    public function getGetCustomerDetailResult(): ?CustomerQueryData
    {
        return $this->GetCustomerDetailResult;
    }

    public function setGetCustomerDetailResult(CustomerQueryData $GetCustomerDetailResult): static
    {
        $this->GetCustomerDetailResult = $GetCustomerDetailResult;
        return $this;
    }

}
