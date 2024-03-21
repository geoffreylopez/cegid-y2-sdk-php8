<?php

namespace Y2\Customer;

class CustomerInsertData extends CustomerInputData
{
    protected ?InternalGuid $CustomerGuid = null;

    protected ?string $CustomerId = null;

    public function __construct()
    {
        parent::__construct();
    }

    public function getCustomerGuid(): ?InternalGuid
    {
        return $this->CustomerGuid;
    }

    public function setCustomerGuid(InternalGuid $CustomerGuid): static
    {
        $this->CustomerGuid = $CustomerGuid;
        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->CustomerId;
    }

    public function setCustomerId(string $CustomerId): static
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

}
