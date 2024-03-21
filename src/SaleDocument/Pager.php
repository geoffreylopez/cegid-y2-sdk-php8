<?php

namespace Y2\SaleDocument;

class Pager
{
    protected ?int $PageIndex = null;

    protected ?int $PageSize = null;

    public function __construct()
    {
    
    }

    public function getPageIndex(): ?int
    {
      return $this->PageIndex;
    }

    public function setPageIndex(int $PageIndex): static
    {
      $this->PageIndex = $PageIndex;
      return $this;
    }

    public function getPageSize(): ?int
    {
      return $this->PageSize;
    }

    public function setPageSize(int $PageSize): static
    {
      $this->PageSize = $PageSize;
      return $this;
    }

}
