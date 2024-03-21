<?php

namespace Y2\SaleDocument;

class GetByExternalReferenceResponse
{
    protected ?GetByExternalReference_Reply $GetByExternalReferenceResult = null;

    public function __construct(GetByExternalReference_Reply $GetByExternalReferenceResult)
    {
      $this->GetByExternalReferenceResult = $GetByExternalReferenceResult;
    }

    public function getGetByExternalReferenceResult(): ?GetByExternalReference_Reply
    {
      return $this->GetByExternalReferenceResult;
    }

    public function setGetByExternalReferenceResult(GetByExternalReference_Reply $GetByExternalReferenceResult): static
    {
      $this->GetByExternalReferenceResult = $GetByExternalReferenceResult;
      return $this;
    }

}
