<?php

namespace Y2\Customer;

class CbpFaultDetail
{
    protected ?string $Cause = null;

    protected ?string $Description = null;

    protected ?string $Id = null;

    protected ?string $Message = null;

    protected ?string $SourceLocation = null;

    protected ?string $ToDo = null;


    public function __construct()
    {

    }

    public function getCause(): ?string
    {
        return $this->Cause;
    }

    public function setCause(string $Cause): static
    {
        $this->Cause = $Cause;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;
        return $this;
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

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(string $Message): static
    {
        $this->Message = $Message;
        return $this;
    }

    public function getSourceLocation(): ?string
    {
        return $this->SourceLocation;
    }

    public function setSourceLocation(string $SourceLocation): static
    {
        $this->SourceLocation = $SourceLocation;
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
