<?php

namespace Y2\SaleDocument;

class OmniChannel
{
    protected BillingStatus|string|null $BillingStatus = null;

    protected ?\DateTime $CancelDate = null;

    protected ?string $CancelReasonId = null;

    protected ?CancelStatus $CancelStatus = null;

    protected ?string $Comment = null;

    protected ?string $DeliveryStoreId = null;

    protected DeliveryType|string|null $DeliveryType = null;

    protected ?string $DeliveryWarehouseId = null;

    protected FollowUpStatus|string|null $FollowUpStatus = null;

    protected ?string $GiftMessage = null;

    protected ?GiftMessageType $GiftMessageType = null;

    protected ?\DateTime $LockingDate = null;

    protected ?SaleDocumentIdentifier $OriginalDocument = null;

    protected ?string $PaymentMethodId = null;

    protected PaymentStatus|string|null $PaymentStatus = null;

    protected OrderReturnStatus|string|null $ReturnStatus = null;

    protected ?ReturnType $ReturnType = null;

    protected ShippingStatus|string|null $ShippingStatus = null;

    protected ?string $Tracking = null;

    protected ?string $Transporter = null;

    public function __construct()
    {
    
    }

    public function getBillingStatus(): BillingStatus|string|null
    {
      return $this->BillingStatus;
    }

    public function setBillingStatus(?string $BillingStatus): static
    {
      $this->BillingStatus = $BillingStatus;
      return $this;
    }

    public function getCancelDate(): \DateTime|bool|null
    {
      if ($this->CancelDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CancelDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setCancelDate(?\DateTime $CancelDate = null): static
    {
      if ($CancelDate == null) {
       $this->CancelDate = null;
      } else {
        $this->CancelDate = $CancelDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    public function getCancelReasonId(): ?string
    {
      return $this->CancelReasonId;
    }

    public function setCancelReasonId(?string $CancelReasonId): static
    {
      $this->CancelReasonId = $CancelReasonId;
      return $this;
    }

    public function getCancelStatus(): ?CancelStatus
    {
      return $this->CancelStatus;
    }

    public function setCancelStatus(?CancelStatus $CancelStatus): static
    {
      $this->CancelStatus = $CancelStatus;
      return $this;
    }

    public function getComment(): ?string
    {
      return $this->Comment;
    }

    public function setComment(?string $Comment): static
    {
      $this->Comment = $Comment;
      return $this;
    }

    public function getDeliveryStoreId(): ?string
    {
      return $this->DeliveryStoreId;
    }

    public function setDeliveryStoreId(?string $DeliveryStoreId): static
    {
      $this->DeliveryStoreId = $DeliveryStoreId;
      return $this;
    }

    public function getDeliveryType(): DeliveryType|string|null
    {
      return $this->DeliveryType;
    }

    public function setDeliveryType(?string $DeliveryType): static
    {
      $this->DeliveryType = $DeliveryType;
      return $this;
    }

    public function getDeliveryWarehouseId(): ?string
    {
      return $this->DeliveryWarehouseId;
    }

    public function setDeliveryWarehouseId(?string $DeliveryWarehouseId): static
    {
      $this->DeliveryWarehouseId = $DeliveryWarehouseId;
      return $this;
    }

    public function getFollowUpStatus(): FollowUpStatus|string|null
    {
      return $this->FollowUpStatus;
    }

    public function setFollowUpStatus(?string $FollowUpStatus): static
    {
      $this->FollowUpStatus = $FollowUpStatus;
      return $this;
    }

    public function getGiftMessage(): ?string
    {
      return $this->GiftMessage;
    }

    public function setGiftMessage(?string $GiftMessage): static
    {
      $this->GiftMessage = $GiftMessage;
      return $this;
    }

    public function getGiftMessageType(): ?GiftMessageType
    {
      return $this->GiftMessageType;
    }

    public function setGiftMessageType(?GiftMessageType $GiftMessageType): static
    {
      $this->GiftMessageType = $GiftMessageType;
      return $this;
    }

    public function getLockingDate(): \DateTime|bool|null
    {
      if ($this->LockingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LockingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setLockingDate(?\DateTime $LockingDate = null): static
    {
      if ($LockingDate == null) {
       $this->LockingDate = null;
      } else {
        $this->LockingDate = $LockingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    public function getOriginalDocument(): ?SaleDocumentIdentifier
    {
      return $this->OriginalDocument;
    }

    public function setOriginalDocument(?SaleDocumentIdentifier $OriginalDocument): static
    {
      $this->OriginalDocument = $OriginalDocument;
      return $this;
    }

    public function getPaymentMethodId(): ?string
    {
      return $this->PaymentMethodId;
    }

    public function setPaymentMethodId(?string $PaymentMethodId): static
    {
      $this->PaymentMethodId = $PaymentMethodId;
      return $this;
    }

    public function getPaymentStatus(): string|PaymentStatus|null
    {
      return $this->PaymentStatus;
    }

    public function setPaymentStatus(?string $PaymentStatus): static
    {
      $this->PaymentStatus = $PaymentStatus;
      return $this;
    }

    public function getReturnStatus(): OrderReturnStatus|string|null
    {
      return $this->ReturnStatus;
    }

    public function setReturnStatus(?string $ReturnStatus): static
    {
      $this->ReturnStatus = $ReturnStatus;
      return $this;
    }

    public function getReturnType(): string|ReturnType|null
    {
      return $this->ReturnType;
    }

    public function setReturnType(?string $ReturnType): static
    {
      $this->ReturnType = $ReturnType;
      return $this;
    }

    public function getShippingStatus(): ShippingStatus|string|null
    {
      return $this->ShippingStatus;
    }

    public function setShippingStatus(?string $ShippingStatus): static
    {
      $this->ShippingStatus = $ShippingStatus;
      return $this;
    }

    public function getTracking(): ?string
    {
      return $this->Tracking;
    }

    public function setTracking(?string $Tracking): static
    {
      $this->Tracking = $Tracking;
      return $this;
    }

    public function getTransporter(): ?string
    {
      return $this->Transporter;
    }

    public function setTransporter(?string $Transporter): static
    {
      $this->Transporter = $Transporter;
      return $this;
    }

}
