<?php

namespace Y2\SaleDocument;

class GetHeaderListResponse
{
    protected ?GetHeaderList_Reply $GetHeaderListResult = null;

    public function __construct(GetHeaderList_Reply $GetHeaderListResult)
    {
      $this->GetHeaderListResult = $GetHeaderListResult;
    }

    public function getGetHeaderListResult(): ?GetHeaderList_Reply
    {
      return $this->GetHeaderListResult;
    }

    public function setGetHeaderListResult(GetHeaderList_Reply $GetHeaderListResult): static
    {
      $this->GetHeaderListResult = $GetHeaderListResult;
      return $this;
    }

}
