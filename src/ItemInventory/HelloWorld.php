<?php

namespace Y2\ItemInventory;

class HelloWorld
{
    protected ?string $text = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(string $text, RetailContext $clientContext)
    {
        $this->text          = $text;
        $this->clientContext = $clientContext;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;
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
