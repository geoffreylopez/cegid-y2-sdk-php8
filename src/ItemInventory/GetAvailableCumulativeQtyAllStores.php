<?php

namespace Y2\ItemInventory;

class GetAvailableCumulativeQtyAllStores
{
    protected ?string $itemId = null;

    protected ?ItemIdentifier $itemIdentifier = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(string $itemId, ItemIdentifier $itemIdentifier, RetailContext $clientContext)
    {
        $this->itemId         = $itemId;
        $this->itemIdentifier = $itemIdentifier;
        $this->clientContext  = $clientContext;
    }

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(string $itemId): static
    {
        $this->itemId = $itemId;
        return $this;
    }

    public function getItemIdentifier(): ?ItemIdentifier
    {
        return $this->itemIdentifier;
    }

    public function setItemIdentifier(ItemIdentifier $itemIdentifier): static
    {
        $this->itemIdentifier = $itemIdentifier;
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
