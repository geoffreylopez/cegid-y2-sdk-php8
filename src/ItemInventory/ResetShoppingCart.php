<?php

namespace Y2\ItemInventory;

class ResetShoppingCart
{
    protected ?ResetShoppingCart_Request $request = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(ResetShoppingCart_Request $request, RetailContext $clientContext)
    {
        $this->request       = $request;
        $this->clientContext = $clientContext;
    }

    public function getRequest(): ?ResetShoppingCart_Request
    {
        return $this->request;
    }

    public function setRequest(ResetShoppingCart_Request $request): static
    {
        $this->request = $request;
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
