<?php

namespace Y2\SaleDocument;

class Get_Payment
{
    protected ?float $Amount = null;

    protected ?float $CashAmount = null;

    protected ?string $Code = null;

    protected ?CreditCard $CreditCard = null;

    protected ?string $Currency = null;

    protected ?string $CurrencySymbol = null;

    protected ?\DateTime $DueDate = null;

    protected ?bool $IsReceivedPayment = null;

    protected ?string $Label = null;
    
    public function __construct()
    {
    
    }

    public function getAmount(): ?float
    {
      return $this->Amount;
    }

    public function setAmount(float $Amount): static
    {
      $this->Amount = $Amount;
      return $this;
    }

    public function getCashAmount(): ?float
    {
      return $this->CashAmount;
    }

    public function setCashAmount(float $CashAmount): static
    {
      $this->CashAmount = $CashAmount;
      return $this;
    }

    public function getCode(): ?string
    {
      return $this->Code;
    }

    public function setCode(string $Code): static
    {
      $this->Code = $Code;
      return $this;
    }

    public function getCreditCard(): ?CreditCard
    {
      return $this->CreditCard;
    }

    public function setCreditCard(CreditCard $CreditCard): static
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    public function getCurrency(): ?string
    {
      return $this->Currency;
    }

    public function setCurrency(string $Currency): static
    {
      $this->Currency = $Currency;
      return $this;
    }

    public function getCurrencySymbol(): ?string
    {
      return $this->CurrencySymbol;
    }

    public function setCurrencySymbol(string $CurrencySymbol): static
    {
      $this->CurrencySymbol = $CurrencySymbol;
      return $this;
    }

    public function getDueDate(): \DateTime|bool|null
    {
      if ($this->DueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setDueDate(\DateTime $DueDate = null): static
    {
      if ($DueDate == null) {
       $this->DueDate = null;
      } else {
        $this->DueDate = $DueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    public function getIsReceivedPayment(): ?bool
    {
      return $this->IsReceivedPayment;
    }

    public function setIsReceivedPayment(bool $IsReceivedPayment): static
    {
      $this->IsReceivedPayment = $IsReceivedPayment;
      return $this;
    }

    public function getLabel(): ?string
    {
      return $this->Label;
    }

    public function setLabel(string $Label): static
    {
      $this->Label = $Label;
      return $this;
    }

}
