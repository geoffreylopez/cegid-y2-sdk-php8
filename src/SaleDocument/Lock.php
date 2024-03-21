<?php

namespace Y2\SaleDocument;

class Lock
{
    protected ?Lock_Request $lockRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(Lock_Request $lockRequest, RetailContext $clientContext)
    {
      $this->lockRequest = $lockRequest;
      $this->clientContext = $clientContext;
    }

    public function getLockRequest(): ?Lock_Request
    {
      return $this->lockRequest;
    }

    public function setLockRequest(Lock_Request $lockRequest): static
    {
      $this->lockRequest = $lockRequest;
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
