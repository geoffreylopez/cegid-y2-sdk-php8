<?php

namespace Y2\Customer;

class UserDefinedDate
{
    protected ?string $Id = null;

    protected \DateTime|string|null $Value = null;

    public function __construct()
    {

    }

    public function getId(): ?string
    {
        return $this->Id;
    }

    public function setId(?string $Id): static
    {
        $this->Id = $Id;
        return $this;
    }

    public function getValue(): \DateTime|string|null
    {
        if ($this->Value == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Value);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    public function setValue(\DateTime|string|null $Value = null): static
    {
        if ($Value == null) {
            $this->Value = null;
        } else {
            $this->Value = $Value->format(\DateTime::ATOM);
        }
        return $this;
    }

}
