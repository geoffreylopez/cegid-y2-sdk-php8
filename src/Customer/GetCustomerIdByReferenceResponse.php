<?php

namespace Y2\Customer;

class GetCustomerIdByReferenceResponse
{
    protected ?string $GetCustomerIdByReferenceResult = null;

    public function __construct(string $GetCustomerIdByReferenceResult)
    {
        $this->GetCustomerIdByReferenceResult = $GetCustomerIdByReferenceResult;
    }

    public function getGetCustomerIdByReferenceResult(): ?string
    {
        return $this->GetCustomerIdByReferenceResult;
    }

    public function setGetCustomerIdByReferenceResult(string $GetCustomerIdByReferenceResult): static
    {
        $this->GetCustomerIdByReferenceResult = $GetCustomerIdByReferenceResult;
        return $this;
    }

}
