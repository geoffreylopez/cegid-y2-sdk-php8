<?php

namespace Y2\SaleDocument;

class GetByExternalReference_Reply
{
    protected ?ArrayOfGet_Reply $Get_Replies = null;

    public function __construct()
    {
    
    }

    public function getGet_Replies(): ?ArrayOfGet_Reply
    {
      return $this->Get_Replies;
    }

    public function setGet_Replies(ArrayOfGet_Reply $Get_Replies): static
    {
      $this->Get_Replies = $Get_Replies;
      return $this;
    }

}
