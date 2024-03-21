<?php

namespace Y2\SaleDocument;

class GetHeaderList_Reply
{
    protected ?ArrayOfGet_Header $Headers = null;

    public function __construct()
    {
    
    }

    public function getHeaders(): ?ArrayOfGet_Header
    {
      return $this->Headers;
    }

    public function setHeaders(ArrayOfGet_Header $Headers): static
    {
      $this->Headers = $Headers;
      return $this;
    }

}
