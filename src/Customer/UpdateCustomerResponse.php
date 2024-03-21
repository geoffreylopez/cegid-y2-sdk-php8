<?php

namespace Y2\Customer;

class UpdateCustomerResponse
{
    protected ?string $UpdateCustomerResult = null;

    public function __construct(string $UpdateCustomerResult)
    {
        $this->UpdateCustomerResult = $UpdateCustomerResult;
    }

    public function getUpdateCustomerResult(): ?string
    {
        return $this->UpdateCustomerResult;
    }

    public function setUpdateCustomerResult(string $UpdateCustomerResult): static
    {
        $this->UpdateCustomerResult = $UpdateCustomerResult;
        return $this;
    }

}
