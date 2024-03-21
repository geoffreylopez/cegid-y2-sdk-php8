<?php

namespace Y2\Customer;

class EmailDataType
{
    protected ?string $AlternativeEmail = null;

    protected ?string $Email = null;

    protected ?bool $EmailingAccepted = null;

    protected ?bool $SendReceiptByMail = null;

    public function __construct()
    {

    }

    public function getAlternativeEmail(): ?string
    {
        return $this->AlternativeEmail;
    }

    public function setAlternativeEmail(string $AlternativeEmail): static
    {
        $this->AlternativeEmail = $AlternativeEmail;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;
        return $this;
    }

    public function getEmailingAccepted(): ?bool
    {
        return $this->EmailingAccepted;
    }

    public function setEmailingAccepted(bool $EmailingAccepted): static
    {
        $this->EmailingAccepted = $EmailingAccepted;
        return $this;
    }

    public function getSendReceiptByMail(): ?bool
    {
        return $this->SendReceiptByMail;
    }

    public function setSendReceiptByMail(bool $SendReceiptByMail): static
    {
        $this->SendReceiptByMail = $SendReceiptByMail;
        return $this;
    }

}
