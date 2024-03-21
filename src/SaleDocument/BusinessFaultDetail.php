<?php

namespace Y2\SaleDocument;

class BusinessFaultDetail extends CbpFaultDetail
{
    protected ?ArrayOfstring $MemberNames = null;
    
    public function __construct()
    {
      parent::__construct();
    }

    public function getMemberNames(): ?ArrayOfstring
    {
      return $this->MemberNames;
    }

    public function setMemberNames(ArrayOfstring $MemberNames): static
    {
      $this->MemberNames = $MemberNames;
      return $this;
    }

}
