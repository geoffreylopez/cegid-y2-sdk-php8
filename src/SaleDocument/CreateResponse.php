<?php

namespace Y2\SaleDocument;

class CreateResponse
{
    protected ?Create_Reply $CreateResult = null;

    public function __construct(Create_Reply $CreateResult)
    {
      $this->CreateResult = $CreateResult;
    }

    public function getCreateResult(): ?Create_Reply
    {
      return $this->CreateResult;
    }

    public function setCreateResult(Create_Reply $CreateResult): static
    {
      $this->CreateResult = $CreateResult;
      return $this;
    }

}
