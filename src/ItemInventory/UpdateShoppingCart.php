<?php

namespace Y2\ItemInventory;

class UpdateShoppingCart
{
    protected ?UpdateShoppingCart_Request $request = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(UpdateShoppingCart_Request $request, RetailContext $clientContext)
    {
        $this->request       = $request;
        $this->clientContext = $clientContext;
    }

    public function getRequest(): ?UpdateShoppingCart_Request
    {
        return $this->request;
    }

    public function setRequest(UpdateShoppingCart_Request $request): static
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
