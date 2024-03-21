<?php

namespace Y2\Customer;

class AddNewCustomerResponse
{
    protected ?string $AddNewCustomerResult = null;

    public function __construct(string $AddNewCustomerResult)
    {
        $this->AddNewCustomerResult = $AddNewCustomerResult;
    }

    public function getAddNewCustomerResult(): ?string
    {
        return $this->AddNewCustomerResult;
    }

    public function setAddNewCustomerResult(string $AddNewCustomerResult): static
    {
        $this->AddNewCustomerResult = $AddNewCustomerResult;
        return $this;
    }

}
