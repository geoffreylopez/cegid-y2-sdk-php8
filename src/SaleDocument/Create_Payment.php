<?php

namespace Y2\SaleDocument;

class Create_Payment
{
    protected ?float $Amount = null;

    protected ?string $BonId = null;

    protected ?CreditCard $CreditCard = null;

    protected ?string $CurrencyId = null;

    protected ?\DateTime $DueDate = null;

    protected ?int $Id = null;

    protected ?bool $IsReceivedPayment = null;

    protected ?string $MethodId = null;

    protected ?string $RegisterOperationForReceivedPayment = null;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
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

    public function getBonId(): ?string
    {
        return $this->BonId;
    }

    public function setBonId(string $BonId): static
    {
        $this->BonId = $BonId;
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

    public function getCurrencyId(): ?string
    {
        return $this->CurrencyId;
    }

    public function setCurrencyId(string $CurrencyId): static
    {
        $this->CurrencyId = $CurrencyId;
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
            $this->DueDate = $DueDate->format('Y-m-d');
        }
        return $this;
    }

    public function getId(): ?int
    {
        return $this->Id;
    }

    public function setId(int $Id): static
    {
        $this->Id = $Id;
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

    public function getMethodId(): ?string
    {
        return $this->MethodId;
    }

    public function setMethodId(string $MethodId): static
    {
        $this->MethodId = $MethodId;
        return $this;
    }

    public function getRegisterOperationForReceivedPayment(): ?string
    {
        return $this->RegisterOperationForReceivedPayment;
    }

    public function setRegisterOperationForReceivedPayment(string $RegisterOperationForReceivedPayment): static
    {
        $this->RegisterOperationForReceivedPayment = $RegisterOperationForReceivedPayment;
        return $this;
    }

}
