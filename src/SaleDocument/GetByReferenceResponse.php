<?php

namespace Y2\SaleDocument;

class GetByReferenceResponse
{
    protected ?Get_Reply $GetByReferenceResult = null;

    public function __construct(Get_Reply $GetByReferenceResult)
    {
      $this->GetByReferenceResult = $GetByReferenceResult;
    }

    public function getGetByReferenceResult(): ?Get_Reply
    {
      return $this->GetByReferenceResult;
    }

    public function setGetByReferenceResult(Get_Reply $GetByReferenceResult): static
    {
      $this->GetByReferenceResult = $GetByReferenceResult;
      return $this;
    }

}
