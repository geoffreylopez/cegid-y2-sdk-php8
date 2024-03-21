<?php

namespace Y2\Customer;

class RetailContext
{
    protected ?string $DatabaseId = null;

    public function __construct()
    {

    }

    public function getDatabaseId(): ?string
    {
        return $this->DatabaseId;
    }

    public function setDatabaseId(string $DatabaseId): static
    {
        $this->DatabaseId = $DatabaseId;
        return $this;
    }

}
