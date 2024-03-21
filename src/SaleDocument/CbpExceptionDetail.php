<?php

namespace Y2\SaleDocument;

class CbpExceptionDetail extends ExceptionDetail
{
    protected ?string $Id = null;
    protected ?string $ToDo = null;

    public function __construct()
    {
      parent::__construct();
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

    public function getToDo(): ?string
    {
      return $this->ToDo;
    }

    public function setToDo(string $ToDo): static
    {
      $this->ToDo = $ToDo;
      return $this;
    }

}
