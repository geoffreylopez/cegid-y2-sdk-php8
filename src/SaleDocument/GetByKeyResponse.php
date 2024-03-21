<?php

namespace Y2\SaleDocument;

class GetByKeyResponse
{
    protected ?Get_Reply $GetByKeyResult = null;

    public function __construct(Get_Reply $GetByKeyResult)
    {
      $this->GetByKeyResult = $GetByKeyResult;
    }

    public function getGetByKeyResult(): ?Get_Reply
    {
      return $this->GetByKeyResult;
    }

    public function setGetByKeyResult(Get_Reply $GetByKeyResult): static
    {
      $this->GetByKeyResult = $GetByKeyResult;
      return $this;
    }

}
