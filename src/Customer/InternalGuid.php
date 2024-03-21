<?php

namespace Y2\Customer;

class InternalGuid
{
    protected ?bool $CheckGuid = null;

    protected ?guid $Guid = null;

    public function __construct()
    {

    }

    public function getCheckGuid(): ?bool
    {
        return $this->CheckGuid;
    }

    public function setCheckGuid(bool $CheckGuid): static
    {
        $this->CheckGuid = $CheckGuid;
        return $this;
    }

    public function getGuid(): ?guid
    {
        return $this->Guid;
    }

    public function setGuid(guid $Guid): static
    {
        $this->Guid = $Guid;
        return $this;
    }

}
