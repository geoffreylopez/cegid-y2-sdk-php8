<?php

namespace Y2\SaleDocument;

class ItemIdentifier
{
    protected ?string $Id = null;
    protected ?string $Reference = null;

    public function __construct()
    {
    
    }

    public function getId(): ?string
    {
      return $this->Id;
    }

    public function setId(string $Id): static
    {
      $this->Id = $Id;
      return $this;
    }

    public function getReference(): ?string
    {
      return $this->Reference;
    }

    public function setReference(string $Reference): static
    {
      $this->Reference = $Reference;
      return $this;
    }

}
